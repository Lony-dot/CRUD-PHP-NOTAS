<?php
require __DIR__ . "\../../includes/topo.php"; 
?>

<form>
<div class="card mt-3">
  <div class="card-header">
            Nova Nota
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

