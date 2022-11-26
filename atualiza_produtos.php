<?php 
    include "database.php";
    
    $produtos_id = $_POST['produtos_id'];
    $produtos_nome = $_POST['produtos_nome'];
    $produtos_tipos = $_POST['produtos_tipos'];
    $produtos_categoria = $_POST['produtos_categoria'];
    $produtos_quantidade = $_POST['produtos_quantidade'];
    $produtos_gramatura = $_POST['produtos_gramatura'];
    $produtos_especificacao = $_POST['produtos_especificacao'];
    $produtos_cor = $_POST['produtos_cor'];
  
    $sql = "UPDATE matheus_suzano_produtos SET produtos_nome = '$produtos_nome',
    produtos_tipos = '$produtos_tipos', produtos_categoria = '$produtos_categoria',
    produtos_quantidade = '$produtos_quantidade', produtos_gramatura = '$produtos_gramatura',
    produtos_especificacao = '$produtos_especificacao', produtos_cor = '$produtos_cor'
    WHERE matheus_suzano_produtos.produtos_id = $produtos_id ;";

    if(mysqli_query($conexao, $sql)){
        header("Location: listar_produtos.php");
    }
    else{
        echo "Falha ao atualizar no banco de dados";
    }