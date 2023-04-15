<?php

require 'functions.php';


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/LaracastCourse/demo/index.php' => 'controllers/index.php',
    '/LaracastCourse/demo/about.php' => 'controllers/about.php',
    '/LaracastCourse/demo/contact.php' => 'controllers/contact.php',
    '/LaracastCourse/demo/mission.php' => 'controllers/mission.php'
];

if (array_key_exists($uri, $routes)){
    require $routes[$uri];
}

// if ($uri === '/LaracastCourse/demo/index.php') {
//     require 'controllers/index.php';
// }else if( $uri === '/LaracastCourse/demo/about.php'){
//     require 'controllers/about.php';
// } else if( $uri === '/LaracastCourse/demo/contact.php'){
//     require 'controllers/contact.php';
// }else if( $uri === '/LaracastCourse/demo/mission.php'){
//     require 'controllers/mission.php';
// }

