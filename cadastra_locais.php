<?php 

    include "database.php";

    $locais_pais = $_POST['locais_pais'];
    $locais_estado = $_POST['locais_estado'];
    $locais_cidade = $_POST['locais_cidade'];
    $locais_unidade = $_POST['locais_unidade'];

    $sql = "INSERT INTO matheus_suzano_locais (locais_pais, locais_estado, locais_cidade,locais_unidade) 
    VALUES ('$locais_pais', '$locais_estado', '$locais_cidade','$locais_unidade')";


    if(mysqli_query($conexao, $sql)){
        header("Location: listar_locais.php");
    }
    else{
        echo "Falha ao cadastrar no banco de dados";
    }