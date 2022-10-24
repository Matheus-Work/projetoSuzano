<?php
    include ("database.php");

    session_start();

    $users_login = $_POST['users_login'];

    $users_password = $_POST['users_password'];

    if(empty($users_login))
    {
        $_SESSION['mensagem']="Preencha o campo Login";
        header("Location: login.php");
    }
    else if(empty($users_password))
    {
        $_SESSION['mensagem']="Preencha o campo Senha";
        header("Location: login.php");
    }
    else
    {
        $sql = "SELECT * FROM matheus_suzano_users WHERE users_login='$users_login'
         AND users_password='$users_password'";

        $resultado = mysqli_query($conexao, $sql);

        $dados = mysqli_fetch_assoc($resultado);

        if($dados['users_login']==$users_login && $dados['users_password'] == $users_password)
        {
            $usuario = array("login"=>$dados['users_login'], "senha"=>$dados['users_password'], 
            "perfil"=>$dados['users_profile']);
             
            $_SESSION['usuario'] = $usuario;

            if($usuario['perfil'] == "admin"){
                header("Location: painel.php");
            }
            else{
                header("Location: painel_colaborador.php");
            }
        }
        else
        {
            $_SESSION['mensagem'] = "Login ou senha inválidos";

            header("Location: login.php");
        }

    }
    