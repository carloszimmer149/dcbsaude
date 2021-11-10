<?php

namespace App\Controller\Page;
use \App\Utils\View;

class Home extends Page{
    
    /**
     *  Método responsável por retornar o conteúdo (view) da home.
     * @return string
     */
    public static function getHome(){
        //retorna view da home
        $content = View::render('Page/home');

    //Retorna view da page
    return parent::getPage('DCB Saúde - HOME', $content);    
    }
}