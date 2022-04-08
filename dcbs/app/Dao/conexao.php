<?php


    //Conexão com o banco de dados
    $host = "br988.hostgator.com.br";
    $user = "marc2982_projeto22";
    $password ="projetointegrador22";
    $database = "marc2982_covid22";

    $mysqli = new mysqli($host, $user, $password, $database);


//Tratamento de erro de conexão com o banco de dados
if($mysqli->connect_errno)
    echo "Erro na conexão com o banco! (".$mysqli->connect_errno."); ".$mysqli->connect_error;

?>