<?php 

    include "database.php";

    
    $logistica_id = $_POST['logistica_id'];
    $logistica_empresa = $_POST['logistica_empresa'];
    $logistica_tipo = $_POST['logistica_tipo'];
    $logistica_tempo_contrato = $_POST['logistica_tempo_contrato'];
    $logistica_preco = $_POST['logistica_preco'];
  

    $sql = "UPDATE matheus_suzano_logistica SET logistica_empresa = '$logistica_empresa',
    logistica_tipo = '$logistica_tipo', 
    logistica_tempo_contrato = '$logistica_tempo_contrato',
    logistica_preco = '$logistica_preco'
    WHERE matheus_suzano_logistica.logistica_id = $logistica_id ;";

    if(mysqli_query($conexao, $sql)){
        header("Location: listar_logisticas.php");
    }
    else{
        echo "Falha ao atualizar no banco de dados";
    }