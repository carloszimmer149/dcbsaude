<?php

namespace App\Controller\Page;
use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{
    
    /**
     *  Método responsável por retornar o conteúdo (view) da home.
     * @return string
     */
    public static function getHome(){
        $obOrganization = new Organization;
        //retorna view da home
        $content = View::render('Page/home',[
            'name' => $obOrganization->name,
            'dev' => $obOrganization->dev
        ]);
        

    //Retorna view da page
    return parent::getPage('DCB Saúde - HOME', $content);    
    }
}
?>