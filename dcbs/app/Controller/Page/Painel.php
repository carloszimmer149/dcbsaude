<?php

namespace App\Controller\Page;
use \App\Utils\View;
use \App\Model\Entity\Organization;

class Painel extends Page{
    
    /**
     *  Método responsável por retornar o conteúdo (view) do Painel.
     * @return string
     */
    public static function getPainel(){
        $obOrganization = new Organization;
        //retorna view da Painel
        $content = View::render('Page/painel',[
            'name' => $obOrganization->name,
            'dev' => $obOrganization->dev

        ]);
        

    //Retorna view da page
    return parent::getPage('DCB Saúde - Painel', $content);    
    }
}