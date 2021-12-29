<?php
/** @var \Laravel\Lumen\Routing\Router $router */

$router->post('login', 'Auth\AuthenticatedController@store');
