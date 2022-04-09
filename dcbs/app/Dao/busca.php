<?php

class Busca{

    //busca dados no banco
    public static function getdb(){

        
        //Conexao com o banco de dados mysql
        include("App/Dao/conexao.php");
        //busca no banco de dados
        $sql = "SELECT count (casosNovos, Recuperadonovos, obitosNovos) FROM covid22 ";
        $con = $mysqli->query($sql) or die($mysqli->error);
        while($dado = $con->fetch_array()){
            $dbconfirmados = $dado["casosNovos"];
            $dbrecuperados = $dado["Recuperadonovos"];
            $obitos = $dado["obitosNovos"];
        }
        mysqli_close($mysqli);
        
    
    }
}
?>