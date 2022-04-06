<?php

// Require composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Create Router instance
$router = new \Bramus\Router\Router();

// Define routes
// ...


$router->get('/', function () {
    require "home.php";
});
$router->get('/blog', function () {
    echo 'Blog about me';
});
$router->post('/post', function () {
    var_dump($_POST);
});

// Run it!
$router->run();
