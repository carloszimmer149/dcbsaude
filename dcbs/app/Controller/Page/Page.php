<?php

namespace App\Controller\Page;
use \App\Utils\View;
use \App\Model\Entity\Organization;

//Conexao com o banco de dados mysql
include("App/Dao/conexao.php");

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
        ]);

    }
}
?>