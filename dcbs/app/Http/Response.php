<?php

namespace App\Http;

class Response{

    /**
     * Código do status HTTP
     * @var integer
     */
    private $httpCode = 200;

    /**
     * Cabeçalho do Response
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteúdo que está sendo retornado
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Conteudo Response
     * @var mixed
     */
    private $content;

    /**
     * Método responsavel por iniciar a classe e definir os valores
     * @param integer
     * @param mixed
     * @param string
     */
    public function __construct($httpCode,$content,$contentType = 'text/html'){
        $this->httpCode = $httpCode;
        $this->content  = $content;
        $this->setContentType($contentType);
    }
    /**
     * Método responsavel por alterar o content type do response
     * @param string $contentType
     */
    public function setContentType($contentType){
        $this->contentType = $contentType;
        $this->addHeader('Content-Type',$contentType);
    }
    /**
     * Método responsável por adicionar um registro no cabeçalho de response
     * @param string
     * @param string
     */
    public function addHeader($key,$value){
        $this->headers[$key] = $value;
    }
    /**
     * Método responsavel por enviar os headers para o navegador
     */
    private function sendheaders(){
        //status
        http_response_code($this->httpCode);
        //enviar headers
        foreach($this->headers as $key=>$value){
            header($key.': '.$value);
        }
    }
    /**
     * Método responsavel por enviar a resposta para o usuário
     */
    public function sendResponse(){
        //envia os headers
        $this->sendHeaders();
        //imprime o conteudo
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }

    }
 
    
    
}
?>