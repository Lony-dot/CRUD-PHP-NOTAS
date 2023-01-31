<?php
require __DIR__ . "\../../includes/topo.php"; 

//Edição
if(isset($_GET['id'])){ // Se o GET['id'] existir, faça...
  $label = 'Edita';
}
//Nova disciplina
else{
  $label = 'Nova';
}


?>

<form method="post" action="<?=$url_base?>/sistema/disciplina/disciplina-mov.php?acao=insere">
<div class="card mt-3">
  <div class="card-header">
            <?=$label?>  Disciplina
       </div>
  <div class="card-body">
    <label for="disnome" class="form-label">Nome da disciplina:</label>
    <input type="text" class="form-control" id="disnome" name="disnome">
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>

    <a href="<?=$url_base?>/sistema/disciplina/disciplina-list.php" class="btn btn-danger"><i class="fas fa-window-close">
    </i> Cancelar</a>
  </div>
</div>
</form>

<?php
require __DIR__ . "\../../includes/fundo.php";
?>

