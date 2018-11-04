<?php

class Estado {
    private $nome;
    private $sigla;
    private $pais;
    
    public function getNome() {
        return $this->nome;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function getPais() {
        return $this->pais;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function setPais($pais) {
        $this->pais = $pais;
    }


    
}
