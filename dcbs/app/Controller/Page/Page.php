<?php

namespace App\Controller\Page;
use \App\Utils\View;
use \App\Model\Entity\Organization;
use mysqli;

class Page{
    
    /**
     *  Método responsável por retornar o conteúdo (view) da page.
     * @return string
     */
    public static function getPage($title,$content){
        $obOrganization = new Organization;
        return View::render('Page/page',[
        'title' => $title,
        'content' => $content,
        'dev' => $obOrganization->dev,
        'confirmados' => $obOrganization->confirmados,
        'recuperados' => $obOrganization->recuperados,
        'obitos' => $obOrganization->obitos,
        ]);
    
        
    }
}

?>