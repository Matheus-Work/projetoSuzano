<?php 

    include "database.php";

    
    $users_id = $_POST['users_id'];
    $users_login = $_POST['users_login'];
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
        echo "Falha ao cadastrar no banco de dados";
    }