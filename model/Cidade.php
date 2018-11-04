<?php

class Cidade {
    private $nome;
    private $estado;
    
    public function getNome() {
        return $this->nome;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }


}
