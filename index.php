<?php

require 'functions.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = str_replace('.php', '', $url);

$routes = [
    '/index' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/mission' => 'controllers/mission.php'
];

if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}