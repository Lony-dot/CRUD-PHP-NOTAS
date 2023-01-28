<?php
require __DIR__ . "\../../includes/topo.php"; 
?>
<div class="card mt-3">
  <div class="card-header">
    <div class="row">
        <div class="col-6 mt-2">
            Listagem de Disciplinas
      </div>
      <div class="col-6 text-end">
      <a href="<?= $url_base?>/sistema/disciplina/disciplina-form.php" type="button" class="btn btn-primary"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
       </div>
      </div>
  </div>
    <div class="card-body">
     <table class="table">
     <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Disciplinhas</th>
            <th scope="col">Ações</th> 
        </tr>
     </thead>
     <tbody>
        <tr>
        <th scope="row">1</th>
            <td>Disciplina teste</td>
            <td>
            <button type="button" class="btn btn-warning"><i class="fa-sharp fa-solid fa-pen-to-square"></i></button>

            <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>     
        </tr>
     </tbody>
    </table>
  </div>
</div>

<?php
require __DIR__ . "\../../includes/fundo.php";
?>

