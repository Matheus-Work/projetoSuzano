<?php       
    
    require("database.php");
    $sql = "SELECT * FROM matheus_suzano_users";
    $resultado = mysqli_query($conexao, $sql);
    require("header_admin.php");
    session_start();
    $usuario = $_SESSION['usuario'];
?>

<div class="container mt-3">
  <h3>Lista de Colaboradores</h3>
          <table class="table table-striped">
          <thead>       
            <tr>
              <th>Login: </th>
              <th>Senha: </th>
              <th>Perfil: </th>
              <th>Atualizar: </th>
              <th>Excluir: </th>
            </tr>
          </thead>
          <tbody>
              <?php while($listar_colaborador = mysqli_fetch_assoc($resultado)){  ?>
                  <tr>
                      <td><?php echo $listar_colaborador['users_login'];?></td>
                      <td><?php echo $listar_colaborador['users_password'];?></td>
                      <td><?php echo $listar_colaborador['users_profile'];?></td>
                      <td><a href="form_atualiza_colaborador.php?id=<?php echo $listar_colaborador['users_id'];?>">ATUALIZAR</a></td>
                      <td><a href="excluir_colaborador.php?id=<?php echo $listar_colaborador['users_id'];?>">EXCLUIR</a></td>
                  </tr>
              <?php } ?>
          </tbody>
        </table>




        <?php       
    require("footer.php");
?>

      