<?php

use CoffeeCode\Router\Router;

require __DIR__."/vendor/autoload.php";

$router = new Router(ROOT);

$router->namespace("Source\Controller");
$router->get("/", "Web:index");

$router->dispatch();