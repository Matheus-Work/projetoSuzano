<?php
    require("database.php");

    $logistica_id = $_GET["id"];

    $sql_delete = "DELETE FROM matheus_suzano_logistica WHERE 
    matheus_suzano_logistica.logistica_id = '$logistica_id'";

    if(mysqli_query($conexao, $sql_delete))
    {
        header("Location: listar_logisticas.php");   
    }
    else
    {
        echo "Erro ao excluir o arquivo";
    }

    