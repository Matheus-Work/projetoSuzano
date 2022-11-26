<?php 

    include "database.php";

    $logistica_empresa = $_POST['logistica_empresa'];
    $logistica_tipo = $_POST['logistica_tipo'];
    $logistica_tempo_contrato = $_POST['logistica_tempo_contrato'];
    $logistica_preco = $_POST['logistica_preco'];

    $sql = "INSERT INTO matheus_suzano_logistica (logistica_empresa, logistica_tipo, logistica_tempo_contrato,logistica_preco) 
    VALUES ('$logistica_empresa', '$logistica_tipo', '$logistica_tempo_contrato','$logistica_preco')";


    if(mysqli_query($conexao, $sql)){
        header("Location: listar_logisticas.php");
    }
    else{
        echo "Falha ao cadastrar no banco de dados";
    }