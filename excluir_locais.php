<?php
    require("database.php");

    $locais_id = $_GET["id"];

    $sql_delete = "DELETE FROM matheus_suzano_locais WHERE 
    matheus_suzano_locais.locais_id = '$locais_id'";

    if(mysqli_query($conexao, $sql_delete))
    {
        header("Location: listar_locais.php");   
    }
    else
    {
        echo "Erro ao excluir o arquivo";
    }

    