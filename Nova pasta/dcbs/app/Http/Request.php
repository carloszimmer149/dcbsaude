<?php

namespace App\Http;

class Request{

    /**
     * Método Http da requisição
     * @var string
     */
    private $httpMethod;

    /**
     * Uri da página
     * @var string
     */
    private $uri;

    /**
     * Parametro da URL ($_GET)
     * @var array
     */
    private $queryParams = [];
    /**
     * Variáveis recebidas no POST da página ($_POST)
     * @var array
     */
    private $postVars = [];
    /**
     * Cabeçalho da requisição
     * @var array
     */
    private $headers = [];

    public function __construct(){
        $this->queryParams  = $_GET ?? [];
        $this->postVars    = $_POST ?? [];
        $this->headers      = getallheaders();
        $this->httpMethod   = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri  = $_SERVER['REQUEST_URI'] ?? '';
    }
    /**
     * Método responsavel por retornar o método HTTP da requisição
     * @return string
     */
    public function getHTTPMethod(){
        return $this->httpMethod;
    }
     /**
     * Método responsavel por retornar a URI da requisição
     * @return string
     */
    public function getUri(){
        return $this->uri;
    }
    /**
     * Método responsavel por retornar os headers da requisição
     * @return string
     */
    public function getHeaders(){
        return $this->headers;
    }
    /**
     * Método responsavel por retornar os parametros da requisição
     * @return string
     */
    public function getQueryParams(){
        return $this->queryParams;
    }
    /**
     * Método responsavel por retornar as variáveis POST da requisição
     * @return string
     */
    public function getPostVars(){
        return $this->postVars;
    }

}