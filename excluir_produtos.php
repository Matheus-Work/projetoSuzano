<?php
    require("database.php");

    $produtos_id = $_GET["id"];

    $sql_delete = "DELETE FROM matheus_suzano_produtos WHERE 
    matheus_suzano_produtos.produtos_id = '$produtos_id'";

    if(mysqli_query($conexao, $sql_delete))
    {
        header("Location: listar_produtos.php");   
    }
    else
    {
        echo "Erro ao excluir o arquivo";
    }
