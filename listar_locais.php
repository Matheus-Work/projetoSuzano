<?php       
    
    require("database.php");
    $sql = "SELECT * FROM matheus_suzano_locais";
    $resultado = mysqli_query($conexao, $sql);
    require("header_admin.php");
    session_start();
    //$usuario = $_SESSION['usuario'];
?>

<div class="container mt-3">
  <h3>Lista dos Locais</h3>
          <table class="table table-striped">
          <thead>       
            <tr>
              <th>País: </th>
              <th>Estado: </th>
              <th>Cidade: </th>
              <th>Unidade: </th>
              <th>Atualizar: </th>
              <th>Excluir: </th>
            </tr>
          </thead>
          <tbody>
              <?php while($listar_locais = mysqli_fetch_assoc($resultado)){  ?>
                  <tr>
                      <td><?php echo $listar_locais['locais_pais'];?></td>
                      <td><?php echo $listar_locais['locais_estado'];?></td>
                      <td><?php echo $listar_locais['locais_cidade'];?></td>
                      <td><?php echo $listar_locais['locais_unidade'];?></td>
                      <td><a href="form_atualiza_locais.php?id=<?php echo $listar_locais['locais_id'];?>">ATUALIZAR</a></td>
                      <td><a href="excluir_locais.php?id=<?php echo $listar_locais['locais_id'];?>">EXCLUIR</a></td>
                  </tr>
              <?php } ?>
          </tbody>
        </table>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        <?php       
    require("footer.php");
?>

      