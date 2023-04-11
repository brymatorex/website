<?php

require 'functions.php';

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = str_replace('.php', '', $url);
$base_url = '/';
$routes = [
    '/' => 'controllers/index.php',
    '/index' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/mission' => 'controllers/mission.php'
];

if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}else{
    header("Location: $base_url");
    exit;
}