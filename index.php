<?php

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/index.php' => 'controllers/index.php',
    '/about.php' => 'controllers/about.php',
    '/contact.php' => 'controllers/contact.php',
    '/mission.php' => 'controllers/mission.php'
];


if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}