<?php

require __DIR__.'/vendor/autoload.php';

use App\Http\Router;
use App\Http\Response;
use App\Controller\Page\Home;

define('URL','http://localhost/dcbs');

$obRouter = new Router(URL);
//rota home
$obRouter->get('/',[
    function(){
        return new Response(200,Home::getHome());
    }
]);
//imprime o response da rota
$obRouter->run()
    ->sendResponse();

