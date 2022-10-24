<?php 

    include "database.php";

    $nome_login = $_POST['nome_login'];
    $password_login = $_POST['password_login'];
    $profile_login = $_POST['profile_login'];

    $sql = "INSERT INTO matheus_suzano_users (users_login, users_password, users_profile) 
    VALUES ('$nome_login', '$password_login', '$profile_login')";


    if(mysqli_query($conexao, $sql)){
        header("Location: listar_colaborador.php");
    }
    else{
        echo "Falha ao cadastrar no banco de dados";
    }