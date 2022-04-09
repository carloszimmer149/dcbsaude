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
        ]);
        //Conexao com o banco de dados mysql
        include("App/Dao/conexao.php");
        //busca no banco de dados
        $sql = "SELECT count (casosNovos, Recuperadonovos, obitosNovos) FROM covid22 ";
        $con = $mysqli->query($sql) or die($mysqli->error);
        mysqli_close($mysqli);
    }
}

?>