<?php

class Pessoa {
    private $nome;
    private $endereco;
    private $cidade;
    private $telefone;
    
    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }


}
