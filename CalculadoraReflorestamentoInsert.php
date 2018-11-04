<?php
require_once 'model/CalculoFlorestamento.php';

$ano = $_POST['ano'];
$estado = $_POST['estado'];
$numero_arvores_cortadas = $_POST['n_arvore'];
$volume = $_POST['volume'];

echo $ano.' '.$estado.' '.$numero_arvores_cortadas.' '.$volume;

$calculoFlorestal = new CalculoFlorestamento;
$calculoFlorestal->setAno($ano);
$calculoFlorestal->setEstado($estado);
$calculoFlorestal->setNumero_arvores_cortadas($numero_arvores_cortadas);
$calculoFlorestal->setVolume($volume);

$calculoFlorestal->save();
        
        



