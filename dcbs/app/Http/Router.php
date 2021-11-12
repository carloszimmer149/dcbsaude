<?php

namespace App\Http;


use \Exception;
use \Closure;

class Router{

    /**
     * URL completa do projeto (raiz)
     */
    private $url = '';

    /**
     * Prefixo de todas as rotas
     * @var string
     */
    private $prefix = '';
    
    /**
     * Indice de Rotas
     * @var array
     */
    private $routes = [];

    /**
     * Instancia de request
     * @var Request
     */
    private $request;

    /**
     * Método responsavel por iniciar a classe
     * @param string
     */
    public function __construct($url){
        $this->request  = new Request;
        $this->url = $url;
        $this->setPrefix();
    }
    /**
     * Método responsavel por definir o prefixo das rotas
     */
    private function setPrefix(){
        $parseUrl = parse_url($this->url);
        //define o prefixo
        $this->prefix = $parseUrl['path'] ?? '';
    }
    /**
     * Método responsavel por adicionar uma rota na classe
     * @param string
     * @param string
     * @param array
     */

    private function addRoute($method,$route,$params = []){
        //validação de parametros
        foreach($params as $key=>$value){
            if($value instanceof Closure){
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }
        //padrão de validação da url
        $patternRoute = '/^'.str_replace('/','\/',$route).'$/';
        //adiciona a rota dentro da classe
        $this->routes[$patternRoute][$method] = $params;
    }
    /**
     * Método que vai definir a rota de GET
     * @param string
     * @param array
     */
    public function get($route,$params = []){
        return $this->addRoute('GET',$route,$params);
    }
    /**
     * Método responsavel por retornar a URI
     * @return string
     */
    private function getUri(){
        //URI da request
        $uri = $this->request->getUri();
        //fatia a URI com o prefixo
        $xUri = strlen($this->prefix) ? explode($this->prefix,$uri) : [$uri];
        //retorna a uri sem prefixo
        
        echo "<pre>";
        print_r($xUri);
        echo "<pre>"; exit;
    }
    /**
     * Método que retorna os dados da rota atual
     * @return array
     */
    private function getRoute(){
        //retorna a URI
        $uri = $this->getUri();
    }
    /**
     * método responsavel por executar a rota atual
     * @return Response
     */
    public function run(){
        try{
            //obtém a rota atual
            $route = $this->getRoute();            
                throw new Exception("URL não pode ser processada", 500);
            
        }catch(Exception $e){
            return new Response($e->getCode(),$e->getMessage());
        }

    }


}