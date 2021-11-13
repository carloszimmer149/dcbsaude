<?php

use App\Http\Response;
use App\Controller\Page;

//rota home
$obRouter->get('/',[
    function(){
        return new Response(200,Page\Home::getHome());
    }
]);
//rota painel
$obRouter->get('/painel',[
    function(){
        return new Response(200,Page\Painel::getHome());
    }
]);
//rota fakenews
$obRouter->get('/fakenews',[
    function(){
        return new Response(200,Page\Fakenews::getHome());
    }
]);