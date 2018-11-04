<?php include 'index.php'; 
 require_once 'model/CalculoFlorestamento.php';
 $cf = new CalculoFlorestamento;
 $result = $cf->selectAll();
?>
<div class="container" style="margin-top: 50px">
    <h1>Resultado Calculadora</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Ano</th>
      <th scope="col">Estado</th>
      <th scope="col">Nº de árvores cortadas</th>
      <th scope="col">Volume</th>
      <th scope="col">Árvores a repor</th>
      <th scope="col">Valor a ser pago</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $total_numero_arvores_cortadas = 0;
  $total_volume = 0;
  foreach ($result as $r){ ?>
    <tr>
      <td><?php echo $r['ano']?></td>
      <td><?php echo $r['estado']?></td>
      <td><?php echo $r['numero_arvores_cortadas']; $total_numero_arvores_cortadas = $total_numero_arvores_cortadas + $r['numero_arvores_cortadas'];?></td>
      <td><?php echo $r['volume']; $total_volume = $total_volume + $r['volume']?></td>
      <td><?php echo $r['volume'] * 6; ?></td>
      <td><?php echo 'R$ '.$r['numero_arvores_cortadas'] * 0.75; ?></td>
    </tr>
  <?php } ?>
    <tr>
      <td colspan="2">Totais</td>
      <td><?php echo $total_numero_arvores_cortadas; ?></td>
      <td><?php echo $total_volume; ?></td>
      <td><?php echo $total_volume * 6; ?></td>
      <td><?php echo 'R$ '.$total_numero_arvores_cortadas * 0.75; ?></td>
    </tr>
  </tbody>
</table>
</div>

