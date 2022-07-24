<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/quem-somos', 'HomeController@quemSomos');
$router->get('/contato', 'HomeController@contato');
$router->post('/contato', 'HomeController@contatoAction');




