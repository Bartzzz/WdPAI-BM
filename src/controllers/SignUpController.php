<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repositories/UserRepository.php';

class SignUpController extends AppController {

    public function signup()
    {
        if (!$this->isPost())
        {
            return $this->render('signup');
        }
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        //TODO try to use better hash function
        $user = new User($email, md5($password), $name, $surname);
        $user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registered!']]);
    }
}