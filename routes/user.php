<?php

$router->group(['prefix' => 'tickets'], function () use ($router) {
    $router->get('users', 'UserController@getAll');
    $router->get('users/{id}', 'UserController@getOne');
 });