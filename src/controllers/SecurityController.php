<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController
{
    public function login()
    {
        $userRepository = new UserRepository();

        if($this->isPost())
        {
            return $this->login('login');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $userRepository->getUser($email);

        if(!$user)
        {
            return $this->render('login', ['messages' => ['User does not exist']]);
        }
        if($user->getEmail() !== $email)
        {
            return $this->render('login', ['messages' => ['User With this email does not exist']]);
        }

        if($user->getPasssword() !== $password)
        {
            return $this->render('login', ['messages' => ['Wrong username or password']]);
        }

        // return $this->render('main');

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/main");
    }
}