<?php include 'index.php'; ?>
<div class="container" style="margin-top: 50px">
    <form method="post" action="CalculadoraReflorestamentoInsert.php">
        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" >
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado">
                <option value="1">RS</option>
                <option value="2">SC</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="n_arvore">Nº de Árvores cortadas</label>
            <input type="number" class="form-control" name="n_arvore" id="n_arvore" >
        </div>
        
        <div class="form-group">
            <label for="volume">Volume(m3)</label>
            <input type="number" class="form-control" name="volume" id="volume" >
        </div>
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Enviar"/>
        </div>
        
        
    </form>
</div>


