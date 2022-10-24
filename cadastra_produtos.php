<?php 

    include "database.php";

    $produtos_nome = $_POST['produtos_nome'];
    $produtos_tipos = $_POST['produtos_tipos'];
    $produtos_categoria = $_POST['produtos_categoria'];
    $produtos_quantidade = $_POST['produtos_quantidade'];
    $produtos_gramatura = $_POST['produtos_gramatura'];
    $produtos_especificacao = $_POST['produtos_especificacao'];
    $produtos_cor = $_POST['produtos_cor'];

    $sql = "INSERT INTO matheus_suzano_produtos (produtos_nome, produtos_tipos
    , produtos_categoria,produtos_quantidade,produtos_gramatura,produtos_especificacao,
    produtos_cor) VALUES ('$produtos_nome', '$produtos_tipos', '$produtos_categoria',
    '$produtos_quantidade','$produtos_gramatura','$produtos_especificacao','$produtos_cor')";

    if(mysqli_query($conexao, $sql)){
        header("Location: listar_produtos.php");
    }
    else{
        echo "Falha ao cadastrar no banco de dados";
    }

