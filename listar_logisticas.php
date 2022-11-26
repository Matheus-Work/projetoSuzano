<?php       
    
    require("database.php");
    $sql = "SELECT * FROM matheus_suzano_logistica";
    $resultado = mysqli_query($conexao, $sql);
    require("header_admin.php");
    session_start();
    //$usuario = $_SESSION['usuario'];
?>

<div class="container mt-3">
  <h3>Lista das Logísticas</h3>
          <table class="table table-striped">
          <thead>       
            <tr>
              <th>Empresa: </th>
              <th>Tipo: </th>
              <th>Tempo de Contrato: </th>
              <th>Preço: </th>
              <th>Atualizar: </th>
              <th>Excluir: </th>
            </tr>
          </thead>
          <tbody>
              <?php while($listar_logistica = mysqli_fetch_assoc($resultado)){  ?>
                  <tr>
                      <td><?php echo $listar_logistica['logistica_empresa'];?></td>
                      <td><?php echo $listar_logistica['logistica_tipo'];?></td>
                      <td><?php echo $listar_logistica['logistica_tempo_contrato'];?></td>
                      <td><?php echo $listar_logistica['logistica_preco'];?></td>
                      <td><a href="form_atualiza_logistica.php?id=<?php echo $listar_logistica['logistica_id'];?>">ATUALIZAR</a></td>
                      <td><a href="excluir_logistica.php?id=<?php echo $listar_logistica['logistica_id'];?>">EXCLUIR</a></td>
                  </tr>
              <?php } ?>
          </tbody>
        </table>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <?php       
    require("footer.php");
?>

      