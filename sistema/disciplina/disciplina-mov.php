<?php
    require __DIR__ . "\../../includes/topo.php"; 
    require __DIR__ . "\../../includes/conexao.php"; 

    if($_GET['acao'] == 'insere') {
        //código de insersão.
        $sql = "INSERT INTO disciplina (disnome) VALUES ('".$_POST['disnome']."')";

    }
    else if($_GET['acao'] == 'edita') {
        $sql = "UPDATE disciplina SET disnome = '".$_POST['disnome']."' WHERE id = " . $_POST['id'];
    
    }
    else if($_GET['acao'] == 'deleta') {
        $sql = "DELETE FROM disciplina WHERE id = " . $_POST['id'];


    }

    
    if($conn->query($sql) === TRUE) {
        //Executado com sucesso.
        header("Location: $url_base/sistema/disciplina/disciplina-list.php?acao=".$_GET['acao']."&ret=1");
    }
    else {
        //Executado com erro.
        header("Location: $url_base/sistema/disciplina/disciplina-list.php?acao=".$_GET['acao']."&ret=2");
    }


    require __DIR__ . "\../../includes/topo.php";  
?>