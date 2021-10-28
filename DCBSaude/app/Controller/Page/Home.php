<?php

namespace App\Controller\Page;
use \App\Utils\View;

class Home{
    
    /**
     *  Método responsável por retornar o conteúdo (view) da home.
     * @return string
     */
    public static function getHome(){
        return View::render('Page/home');
    }
}