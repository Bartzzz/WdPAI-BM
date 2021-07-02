<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('main', 'DefaultController');
Routing::get('training', 'DefaultController');
Routing::get('diet', 'DefaultController');
Routing::get('people', 'DefaultController');
Routing::get('diary', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::post('logout', 'SecurityController');
Routing::post('signup', 'SignUpController');

Routing::run($path);