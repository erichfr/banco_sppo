<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/enviadado', 'EnviaDadosController@enviadado');
$router->get('/consultadado', 'ConsultaDadosController@consultadado');


