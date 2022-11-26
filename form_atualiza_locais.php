<?php       
    include("database.php");

    $locais_id= $_GET["id"];

    $consulta_por_id = "SELECT * FROM `matheus_suzano_locais` WHERE locais_id ='$locais_id'";

    $resultado_por_id = mysqli_query($conexao, $consulta_por_id);

    $atualiza_locais = mysqli_fetch_assoc($resultado_por_id);

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
<p class="letra">Atualizar Locais</p>
    
    <form action="atualiza_locais.php" method="post">
    <div class="container">

    <input type="hidden" name="locais_id" value="<?php echo $atualiza_locais['locais_id'];?>">

    <label for="locais_pais">País: </label>
    <input type="text" name="locais_pais" id="locais_pais" value="<?php echo $atualiza_locais['locais_pais'];?>"><br><br>

    <label for="locais_estado">Estado: </label>
    <input type="text" name="locais_estado" id="locais_estado" value="<?php echo $atualiza_locais['locais_estado'];?>"><br><br>

    <label for="locais_cidade">Cidade: </label>
    <input type="text" name="locais_cidade" id="locais_cidade" value="<?php echo $atualiza_locais['locais_cidade'];?>"><br><br>

    <label for="locais_unidade">Unidade: </label>
    <input type="text" name="locais_unidade" id="locais_unidade" value="<?php echo $atualiza_locais['locais_unidade'];?>"><br><br>

  <button type="submit" class="registerbtn">Atualizar Local</button>
  </div>
</form>
<?php       
    require("footer.php");
?>

     