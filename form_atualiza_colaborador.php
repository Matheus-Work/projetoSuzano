<?php       
    include("database.php");

    $users_id= $_GET["id"];

    $consulta_por_id = "SELECT * FROM `matheus_suzano_users` WHERE users_id ='$users_id'";

    $resultado_por_id = mysqli_query($conexao, $consulta_por_id);

    $atualiza_colaborador = mysqli_fetch_assoc($resultado_por_id);

    require("header_admin.php");
?>
<style>
.letra{
    justify-content:flex-end;
    text-align: center;
}
</style>
<fieldset><br><br>
    <p class="letra">Atualizar Colaborador</p>
    <form action="atualiza_cadastro.php" method="post">
        <input type="hidden" name="users_id" value="<?php echo $atualiza_colaborador['users_id'];?>">

        <label for="nome_login">Login: </label>
        <input type="text" name="users_login" id="users_login" value="<?php echo $atualiza_colaborador['users_login'];?>"><br><br>

        <label for="password_login">Password:</label>
        <input type="text" name="users_password" id="users_password" value="<?php echo $atualiza_colaborador['users_password'];?>"><br><br>

        <label for="profile_login">Perfil de acesso: </label>
        <select name="users_profile" id="users_profile"value="<?php echo $atualiza_colaborador['users_profile'];?>">
        <option value=""></option>
        <option value="admin">Administrador</option>
        <option value="colaborador">Colaborador</option>
        </select><br><br>

        <input type="submit" class="btn btn-info" value="Atualizar Colaborador">
    </form>
</fieldset>
<?php       
    require("footer.php");
?>

     