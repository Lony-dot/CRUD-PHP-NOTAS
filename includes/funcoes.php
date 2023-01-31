<?php

function trataRetorno($acao, $ret){
    switch ($acao) {
        case 'insere':
            $acao_str1 = 'inserido';
            $acao_str2 = 'inserir';
            break;

            case 'edita':
                $acao_str1 = 'editado';
                $acao_str2 = 'editar';
                break;

                case 'deleta':
                    $acao_str1 = 'deletado';
                    $acao_str2 = 'deletar';
                    break;
        
        default:
        $acao_str1 = 'erro';
        $acao_str2 = 'erro';
            break;
    }

    if($ret == 1){
        return '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>SUCESSO!</strong> Registro '.$acao_str1.' com sucesso!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';

    }
    else{
        return '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>SUCESSO!</strong> Erro ao'.$acao_str2.' registro com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
        
        
    }
}
?>