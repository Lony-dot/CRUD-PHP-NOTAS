<?php
require __DIR__ . "\../../includes/topo.php"; 
require __DIR__ . "\../../includes/conexao.php"; 
require __DIR__ . "\../../includes/funcoes.php"; 

$sql = "SELECT n.*, d.disnome FROM nota n INNER JOIN disciplina d ON d.id = n.iddisciplina ORDER BY d.disnome, n.notatividade";
$listagem = $conn->query($sql);
print_r($sql);
die;
?>


<form>
<div class="card mt-3">
  <div class="card-header">
  <div class="row">
        <div class="col-6 mt-2">
            Listagem de Notas
      </div>
      <div class="col-6 text-end">
      <a href="<?=$url_base?>/sistema/disciplina/disciplina-form.php" type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Cadastrar" ><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
       </div>
      </div>
  
    <div class="card-body">
        <div class="row">
          <div class="form-group col-md-4">
            <label for="iddisciplina">Disciplina:</label>
              <select class="form-select" id="iddisciplina" name="ididisciplina">
                <option value=""></option>
                <option value="">Disciplina Teste</option>
              </select>
          </div>
          

          <div class="form-group col-md-4">
            <label for="notatividade">Atividade:</label>
            <input type="text" class="form-control" id="notatividade" name="notatividade">
          </div>

          <div class="form-group col-md-4">
            <label for="notnota">Nota:</label>
            <input type="number" step="0.1" class="form-control" id="notnota" name="notnota">
          </div>
      </div>

</div>
    <div class="card-footer text-muted">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>

        <a href="<?=$url_base?>/sistema/nota/nota-list.php" class="btn btn-danger"><i class="fas fa-window-close"></i>
        Cancelar</a>
    </div>
  </div>
</div>
</form>

<?php
require __DIR__ . "\../../includes/fundo.php";
?>

<script>
window.onload = function(){
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

}

    function preExcluir(id, disnome){
        $('#texto-excluir').html(disnome);
        $('#modalExcluir').modal('show');
    }
</script>