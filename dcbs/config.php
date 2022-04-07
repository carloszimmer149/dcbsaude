<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development') { //se environment for igual development entra no if
	define("BASE_URL", "http://localhost/estrutura_mvc/");//em arquivos de front end usa-se o BASE_URL para definir o local do arquivo, ex: BASE_URL/nome do arquivo
	$config['dbname'] = 'estrutura_mvc'; //nome do DB
	$config['host'] = 'localhost'; //host da hospedagem
	$config['dbuser'] = 'root'; //usuário do DB
	$config['dbpass'] = ''; //senha do DB
} else {	//caso não for development entra no else, no caso será production
	define("BASE_URL", "http://localhost/desafios");//nome do site já hospedado
	$config['dbname'] = 'marc2982_covid22';
	$config['host'] = 'br988.hostgator.com.br';
	$config['dbuser'] = 'marc2982_projeto22';
	$config['dbpass'] = 'projetointegrador22';
}

global $db; //tornar a váriavle do DB global para poder usar em qualquer lugar

try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);//fez a conexão ao DB
} catch(PDOException $e) {
	echo 'ERRO: '.$e->getMessage();
	exit;
}