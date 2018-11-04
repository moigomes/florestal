<?php

class Colaborador extends Pessoa{
    private $cargo;
    
    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }


}
