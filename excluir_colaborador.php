<?php
    require("database.php");

    $users_id = $_GET["id"];

    $sql_delete = "DELETE FROM matheus_suzano_users WHERE 
    matheus_suzano_users.users_id = '$users_id'";

    if(mysqli_query($conexao, $sql_delete))
    {
        header("Location: listar_colaborador.php");   
    }
    else
    {
        echo "Erro ao excluir o arquivo";
    }

    