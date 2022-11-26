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
<p class="letra">Cadastro de Logística</p>
<form action="cadastra_logistica.php" method="post">
  <div class="container">

  <label for="logistica_empresa">Empresa: </label>
  <input type="text" placeholder="Informe o Nome da Empresa" name="logistica_empresa" id="logistica_empresa" required>
  <br><br>

  <label for="logistica_tipo">Tipo: </label>
  <select name="logistica_tipo" id="logistica_tipo">
    <option value=""></option>
    <option value="Colaboradores">Colaboradores</option>
    <option value="Cargas">Cargas</option>
  </select>
  <br><br>

  <label for="logistica_tempo_contrato">Até Quando vai o Contrato: </label>
  <input type="month" name="logistica_tempo_contrato" id="logistica_tempo_contrato" required>
  <br><br>

  <label for="logistica_preco">Preço do Contrato: </label>
  <input type="" placeholder="Informe o Valor Gasto" name="logistica_preco" id="logistica_preco" required>
  <br><br>

  <button type="submit" class="registerbtn">Cadastrar Logística</button>
  </div>
</form>
    </fieldset>

<?php       
    require("footer.php");
?>