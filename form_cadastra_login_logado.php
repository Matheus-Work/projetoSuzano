<?php       
    require("header_admin.php");
?>
<style>
    * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.imglogo2{
        width:10%;
        right:47%;
        top: 10%;
        position: absolute;
    }
    .letra{
        justify-content:flex-end;
        text-align: center;
    }
</style>
<br><br>

<p class="letra">Cadastrar Colaborador</p>
    
<form action="cadastra_login_logado.php" method="post">
  <div class="container">

  <label for="email"><b>Usuario: </b></label>
  <input type="text" placeholder="" name="nome_login" id="email" required>

  <label for="psw"><b>Senha: </b></label>
  <input type="password" placeholder="" name="password_login" id="psw" required>

  <label for="email"><b>Perfil de acesso</b></label><br><br>
  <select name="profile_login" id="">
  <option value=""></option>
          <option value="admin">Administrador</option>
          <option value="colaborador">Colaborador</option>
  </select>
  <hr>

  <button type="submit" class="registerbtn">Cadastrar Colaborador</button>
  </div>
</form>

<?php       
  require("footer.php");
?>