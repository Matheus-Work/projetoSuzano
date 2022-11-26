<?php 

    include "database.php";

    
    $locais_id = $_POST['locais_id'];
    $locais_pais = $_POST['locais_pais'];
    $locais_estado = $_POST['locais_estado'];
    $locais_cidade = $_POST['locais_cidade'];
    $locais_unidade = $_POST['locais_unidade'];
  

    $sql = "UPDATE matheus_suzano_locais SET locais_pais = '$locais_pais',
    locais_estado = '$locais_estado', 
    locais_cidade = '$locais_cidade',
    locais_unidade = '$locais_unidade'
    WHERE matheus_suzano_locais.locais_id = $locais_id ;";

    if(mysqli_query($conexao, $sql)){
        header("Location: listar_locais.php");
    }
    else{
        echo "Falha ao atualizar no banco de dados";
    }