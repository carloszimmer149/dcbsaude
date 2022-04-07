<?php

require __DIR__.'/vendor/autoload.php';
require 'config.php';
require 'App/Dao/conexao.php';

use App\Http\Router;


define('URL','http://localhost/dcbs');

$obRouter = new Router(URL);
//inclui as rotas de pagina
include __DIR__."/routes/pages.php";

//imprime o response da rota
$obRouter->run()
         ->sendResponse();

//Conexao com o banco de dados mysql
$covidDao = new CovidDaoMysql($db);
$list = $covidDao->findAll();

