<?php

$router->group(['prefix' => 'tickets'], function () use ($router) {
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');
 });