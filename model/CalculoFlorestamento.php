<?php

require_once './MyConnection.php';

class CalculoFlorestamento {

    private $ano;
    private $estado;
    private $numero_arvores_cortadas;
    private $volume;
    private $conexao;

    public function __construct() {
        $this->conexao = getConnection();
    }

    public function getAno() {
        return $this->ano;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getNumero_arvores_cortadas() {
        return $this->numero_arvores_cortadas;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setNumero_arvores_cortadas($numero_arvores_cortadas) {
        $this->numero_arvores_cortadas = $numero_arvores_cortadas;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
    }

    public function save() {
        $query = "insert into calculo_reflorestamento "
                . "(ano, id_estado, numero_arvores_cortadas, volume)"
                . " values "
                . "('" . $this->getAno() . "', "
                . "'" . $this->getEstado() . "', "
                . "'" . $this->getNumero_arvores_cortadas() . "', "
                . "'" . $this->getVolume() . "');";
       
        if ($this->conexao->query($query) === TRUE) {
            header("location:./ResultadoCalculadora.php");
        } else {
            echo 'Erro ao salvar os dados!' . $this->conexao->error;
            
        }
    }
    
    public function selectAll(){
        $query = "select e.nome as estado, cf.* from calculo_reflorestamento cf "
                . "inner join estado e on e.id = cf.id_estado";
            
        return $this->conexao->query($query);
    }

}
