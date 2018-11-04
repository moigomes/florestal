<?php

class Fornecedor extends Pessoa{
    private $empresa;
    
    public function getEmpresa() {
        return $this->empresa;
    }

    public function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }


}
