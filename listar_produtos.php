<?php       
    
    require("database.php");
    $sql = "SELECT * FROM matheus_suzano_produtos";
    $resultado = mysqli_query($conexao, $sql);
    
    
    require("header_admin.php");
    session_start();
    $usuario = $_SESSION['usuario'];
?>

<div class="container mt-3">
  <h3>Lista de Produtos</h3>
          <table class="table table-striped">
          <thead>        
            <tr>
              <th>Nome: </th>
              <th>Tipos: </th>
              <th>Categoria: </th>
              <th>Quantidade: </th>
              <th>Gramatura: </th>
              <th>Especificação: </th>
              <th>Cor: </th>
              <th>Atualizar: </th>
              <th>Excluir: </th>
            </tr>
          </thead>
          <tbody>
              <?php while($listar_produtos = mysqli_fetch_assoc($resultado)){  ?>
                  <tr>
                      <td><?php echo $listar_produtos['produtos_nome'];?></td>
                      <td><?php echo $listar_produtos['produtos_tipos'];?></td>
                      <td><?php echo $listar_produtos['produtos_categoria'];?></td>
                      <td><?php echo $listar_produtos['produtos_quantidade'];?></td>
                      <td><?php echo $listar_produtos['produtos_gramatura'];?></td>
                      <td><?php echo $listar_produtos['produtos_especificacao'];?></td>
                      <td><?php echo $listar_produtos['produtos_cor'];?></td>
                      <td><a href="form_atualiza_produtos.php?id=<?php echo $listar_produtos['produtos_id'];?>">ATUALIZAR</a></td>
                      <td><a href="excluir_produtos.php?id=<?php echo $listar_produtos['produtos_id'];?>">EXCLUIR</a></td>
                  </tr>
              <?php } ?>
          </tbody>
        </table>

        <?php       
    require("footer.php");
?>
      