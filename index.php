<?php

ob_start();
require __DIR__ . "/vendor/autoload.php";


use CoffeeCode\Router\Router;

$route = new Router(url(), ":");
$route->namespace("Source\Application");

$route->group(null);
$route->get("/", "ListPosts:home");
$route->get("/posts", "ListPosts:posts");
$route->get("/posts/p/{page}", "ListPosts:posts");
$route->get("/posts/{userId}", "ListPosts:posts");
$route->get("/posts/{userId}/{id}", "ListPosts:posts");


$route->dispatch();

if ($route->error()) {
    $route->redirect(url());
}

ob_end_flush();