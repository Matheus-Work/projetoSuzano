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
<p class="letra">Cadastro de Produtos</p>
<form action="cadastra_produtos.php" method="post">
  <div class="container">

  <label for="produtos_nome">Nome: </label>
          <select name="produtos_nome" id="produtos_nome">
          <option value=""></option>
          <option value="Celulose">Celulose</option>
          <option value="Papel">Papel</option>
          <option value="Higiene">Higiene</option>
          </select><br><br>

  <label for="produtos_tipos">Tipos: </label>
          <select name="produtos_tipos" id="produtos_tipos">
          <option value=""></option>
          <option value="Fibra Curta">Fibra Curta</option>
          <option value="Fribra Longa">Fibra Longa</option>
          <option value="Fluff">Fluff</option>
          <option value="Sulfites">Sulfite</option>
          <option value="Não Revestidos">Não Revestidos</option>
          <option value="Bebê">Bebê</option>
          <option value="Família">Para Família</option>
          </select><br><br>


    <label for="produtos_categoria">Categoria: </label>
          <select name="produtos_categoria" id="produtos_categoria">
          <option value=""></option>
          <option value="Composto Orgânico">Composto Orgânico</option>
          <option value="Papel">Papel</option>
          <option value="Papel-Higienico">Papel-Higienico</option>
          </select><br><br>

          <label for="produtos_quantidade">Quantidade: </label>
          <select name="produtos_quantidade" id="produtos_quantidade">
          <option value=""></option>
          <option value="10">10</option>
          <option value="50">50</option>
          <option value="100">100</option>
          </select><br><br>

  <label for="produtos_gramatura">Gramatura: </label>
          <select name="produtos_gramatura" id="produtos_gramatura">
          <option value=""></option>
          <option value="75 g/m²">75 g/m²</option>
          <option value="90 g/m²">90 g/m²</option>
          <option value="50 g/m²">50 g/m²</option>
          </select><br><br>


    <label for="produtos_especificacao">Especificação: </label>
          <select name="produtos_especificacao" id="produtos_especificacao">
          <option value=""></option>
          <option value="Polímero">Polímero</option>
          <option value="A4">A4</option>
          <option value="A3">A3</option>
          <option value="Cartaz">Cartaz</option>
          <option value="Mimmo">Mimmo</option>
          <option value="Scala">Scala</option>
          </select><br><br>

          <label for="produtos_cor">Cor: </label>
          <select name="produtos_cor" id="produtos_cor">
          <option value=""></option>
          <option value="Branco">Branco</option>
          <option value="Azul">Azul</option>
          <option value="Rosa">Rosa</option>
          </select><br><br>

    <button type="submit" class="registerbtn">Cadastrar Produto</button>
  </div>
</form>
    </fieldset>

<?php       
    require("footer.php");
?>