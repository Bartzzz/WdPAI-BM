<?php

require_once 'AppController.php';

class DefaultController extends AppController
 {
    public function index()
    {
        $this->render('login');
    }

    public function main()
    {
        $this->render('profile');
    }

    public function training()
    {
        $this->render('training');
    }

    public function diet()
    {
        $this->render('diet');
    }

    public function diary()
    {
        $this->render('diary');
    }

    public function people()
    {
        $this->render('people');
    }
}