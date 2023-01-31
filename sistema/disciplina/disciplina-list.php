<?php
require __DIR__ . "\../../includes/topo.php"; 
require __DIR__ . "\../../includes/conexao.php"; 
require __DIR__ . "\../../includes/funcoes.php"; 

$sql = "SELECT * FROM disciplina ORDER BY disnome";
$listagem = $conn->query($sql);
?>

<?php if(isset($_GET['acao'])) echo trataRetorno($_GET['acao'], $_GET['ret']);?>

<div class="card mt-3">
  <div class="card-header">
    <div class="row">
        <div class="col-6 mt-2">
            Listagem de Disciplinas
      </div>
      <div class="col-6 text-end">
      <a href="<?=$url_base?>/sistema/disciplina/disciplina-form.php" type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Cadastrar" ><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
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
        <?php
        while($linha = $listagem->fetch_assoc()) { //fetch_assoc() busca um elemento da variável listagem e joga em $linha
        ?>
        <tr>
        <th scope="row"><?=$linha['id']?></th>
            <td><?= $linha['disnome']?></td>
            <td>
            <a href="<?=$url_base?>/sistema/disciplina/disciplina-form.php?id=<?=$linha['id']?>" type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>

            <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Excluir" onclick="preExcluir(1, 'Disciplina teste')"><i class="fas fa-trash"></i></button>
            </td>     
        </tr>
        <?php }?>
     </tbody>
    </table>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modalExcluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Exclusão de disciplina</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Deseja realmente excluir o registro?</p>
        <p id="texto-excluir" class="text-primary"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Excluir</button>
      </div>
    </div>
  </div>
</div>

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
