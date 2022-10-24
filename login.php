<?php       
    //Inserindo o comando para colocar o conteúdo 
    require("header.php");
    session_start();
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
<p class="letra">Entrar</p>
<form action="valida_login.php" method="post">
  <div class="container">

    <label for="email"><b>Nome</b></label>
    <input type="text" placeholder="Nome" name="users_login" id="email" required>

    <label for="psw"><b>Senha</b></label>
    <input type="password" placeholder="Senha" name="users_password" id="psw" required>
    <hr>

    <button type="submit" class="registerbtn">Entre aqui</button>
  </div>

  <div class="container signin">
    <p>Ainda não tem uma conta? <a href="form_cadastra_login.php">Cadastra-se Aqui</a>.</p>
  </div>
</form>
        <?php
            //Comando em PHP para imprimir uma mensagem de erro abaixo do formulário de login
            //Comando para iniciar uma sessão em PHP
 
            
            //Verifica se existe alguma mensagem na sessão, armazena em uma variável e imprime
            if(isset($_SESSION['mensagem']))
            {
                //armazena em uma variável a mensagem da sessão
                $mensagem = $_SESSION['mensagem'];

                //comando para imprimir a mensagem da sessão 
                echo '<br><p>'. $mensagem . '</p>';

                //Unset retira a mensagem da sessão
                unset($_SESSION['mensagem']);
            }
        ?>
    </div>

    <?php       
    require("footer.php");
?>