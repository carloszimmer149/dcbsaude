<?php

namespace App\Model\Entity;

class Organization{

    /**
     * ID da organização
     * @var integer
     */
    public $id = 1;

    /**
     * Nome da organização
     * @var string
     */
    public $name = 'DCB Saúde';

    /**
     * marca desenvolvedor
     * @var string
     */
    public $dev = 'Carlos Zimmer - 2021';

    /**
     * marca desenvolvedor
     * 
     */
    public $confirmados = $covid->getCasosNovos();

    /**
     * marca desenvolvedor
     * @var string
     */
    public $recuperados = $covid->getRecuperadoNovos();

    /**
     * marca desenvolvedor
     * @var string
     */
    public $obitos = $covid->getObitosNovos();

}
?>