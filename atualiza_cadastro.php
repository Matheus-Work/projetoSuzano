<?php 

    include "database.php";

    
    $locais_pais = $_POST['locais_pais'];
    $locais_estado = $_POST['locais_estado'];
    $users_password = $_POST['users_password'];
    $users_profile = $_POST['users_profile'];
  

    $sql = "UPDATE matheus_suzano_users SET users_login = '$users_login',
    users_password = '$users_password', 
    users_profile = '$users_profile' 
    WHERE matheus_suzano_users.users_id = $users_id ;";

    if($users_profile == ""){
        echo "Preencha o campo Perfil";
    }
    else if(mysqli_query($conexao, $sql)){
        header("Location: listar_colaborador.php");
    }
    else{
        echo "Falha ao atualizar no banco de dados";
    }