<?php

ob_start();
require __DIR__ . "/vendor/autoload.php";


use CoffeeCode\Router\Router;

$route = new Router(url(), ":");
$route->namespace("Source\Application");

$route->group(null);
$route->get("/", "ListPosts:home");
$route->get("/post", "ListPosts:posts");
$route->get("/post/p/{page}", "ListPosts:posts");
$route->get("/post/{userId}/{id}", "ListPosts:post");


$route->dispatch();

if ($route->error()) {
    $route->redirect(url());
}

ob_end_flush();