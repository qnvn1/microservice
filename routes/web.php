<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/users', 'UserController@getUsers');
$router->get('/userslist', 'UserController@userslist');