<?php
class covid{

	private $casosNovos;
	private $recuperadoNovos;
	private $obitosNovos;

	public function getCasosNovos(){
		return $this->casosNovos;
	}

	public function getRecuperadoNovos(){
		return $this->recuperadoNovos;
	}

	public function getObitosNovos(){
		return $this->obitosNovos;
	}
		public function setCasosNovos($novos){
		$this->casosNovos = $novos;
	}

	public function setRecuperadoNovos($recuperados){
		$this->recuperadoNovos = $recuperados;
	}

	public function setObitosNovos($obitos){
		$this->obitosNovos = $obitos;
	}
}