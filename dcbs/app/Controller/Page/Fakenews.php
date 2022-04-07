<?php

namespace App\Controller\Page;
use \App\Utils\View;
use \App\Model\Entity\Organization;

class Fakenews extends Page{
    
    /**
     *  Método responsável por retornar o conteúdo (view) da Fakenews.
     * @return string
     */
    public static function getFakenews(){
        $obOrganization = new Organization;
        //retorna view da Fakenews
        $content = View::render('Page/fakenews',[
            'name' => $obOrganization->name,
            'dev' => $obOrganization->dev
        ]);
        

    //Retorna view da page
    return parent::getPage('DCB Saúde - Fakenews', $content);    
    }
}
?>