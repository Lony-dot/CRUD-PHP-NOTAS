<?php
require __DIR__ . "\../../includes/topo.php"; 
?>

<form action="">
<div class="card mt-3">
  <div class="card-header">
            Nova Disciplina
       </div>
    <div class="card-body">
    <label for="disnome" class="form-label">Nome da disciplina:</label>
    <input type="text" class="form-control" id="disnome" name="disnome">
  </div>
  <div class="cardfooter">
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>

    <a href="<?=$url_base?>/sistema/disciplina/disciplina-list.php" class="btn btn-danger"><i class="fas fa-window-close"></i> Cancelar</a>


  </div>
</div>
</form>

<?php
require __DIR__ . "\../../includes/fundo.php";
?>

