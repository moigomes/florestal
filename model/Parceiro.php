<?php

class Parceiro extends Pessoa{
    private $valor;
    
    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }


}
