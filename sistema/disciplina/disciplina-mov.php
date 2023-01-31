<?php
    require __DIR__ . "\../../includes/topo.php"; 
    require __DIR__ . "\../../includes/conexao.php"; 

    if($_GET['acao'] == 'insere') {
        //código de insersão.

        $sql = "INSERT INTO disciplina (disnome) VALUES ('".$_POST['disnome']."')";


        if($conn->query($sql) === TRUE) {
            //Executado com sucesso.
            header("Location: $url_base/sistema/disciplina/disciplina-list.php?acao=insere&ret=1");
        }
        else {
            //Executado com erro.
            header("Location: $url_base/sistema/disciplina/disciplina-list.php?acao=insere&ret=2");
        }

    }
    else if($_GET['acao'] == 'edita') {
        //código de edição.


    }
    else if($_GET['acao'] == 'deleta') {
        //código de deleção.

    } 


    require __DIR__ . "\../../includes/topo.php";  
?>