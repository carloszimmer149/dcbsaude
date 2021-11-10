<?php

namespace App\Controller\Page;
use \App\Utils\View;

class Page{
    
    /**
     *  Método responsável por retornar o conteúdo (view) da page.
     * @return string
     */
    public static function getPage($title,$content){
        return View::render('Page/page',[
        'title' => $title,
        'content' => $content
        ]);

    }
}