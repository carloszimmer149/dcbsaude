<?php

require_once 'App/Model/covid.php';

class CovidDaoMysql{
	private $db;

	public function __construct(PDO $driver){
		$this->db = $driver;
	}

	public function findAll(){
		$array = [];

		$sql = $this->db->query("SELECT casosNovos, Recuperadonovos, obitosNovos FROM covid22 LIMIT 1");
		if($sql->rowCount() > 0){
			$data = $sql->fetchAll();

			foreach($data as $item){
				$c = new covid();
				$c->setCasosNovos($item['casosNovos']);
				$c->setRecuperadoNovos($item['Recuperadonovos']);
				$c->setObitosNovos($item['obitosNovos']);
				$array[] = $c;
			}

		}

		return $array;
	}
}