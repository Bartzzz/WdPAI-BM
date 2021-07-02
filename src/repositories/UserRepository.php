<?php

require_once 'BaseRepository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends BaseRepository
{

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (name, surname, password, email)
            VALUES (?, ?, ?, ?)');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getPassword(),
            $user->getEmail(),
        ]);
    }
}