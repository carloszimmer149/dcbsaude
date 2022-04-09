<?php

namespace App\Model\Entity;
use \App\Dao\Busca;


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
     * @var int
     */
    public $confirmados;

    /**
     * marca desenvolvedor
     * @var int
     */
    public $recuperados;

    /**
     * marca desenvolvedor
     * @var int
     */
    public $obitos;


    
}
?>