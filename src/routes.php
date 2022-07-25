<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/envia', 'EnviaDadosController@envia');
$router->get('/consulta', 'ConsultaDadosController@consulta');


