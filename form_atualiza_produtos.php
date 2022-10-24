<?php       
    include("database.php");

    $produtos_id= $_GET["id"];

    $consulta_por_id = "SELECT * FROM `matheus_suzano_produtos` WHERE produtos_id ='$produtos_id'";

    $resultado_por_id = mysqli_query($conexao, $consulta_por_id);

    $atualiza_produtos = mysqli_fetch_assoc($resultado_por_id);

    require("header_admin.php");
?>
<style>
.letra{
    justify-content:flex-end;
    text-align: center;
}
   
</style>
<fieldset><br><br>
    <p class="letra">Atualizar Produtos</p>
    <form action="atualiza_produtos.php" method="post">
        <input type="hidden" name="produtos_id" value="<?php echo $atualiza_produtos['produtos_id'];?>">

        <label for="produtos_nome">Nome: </label>
        <select name="produtos_nome" id="produtos_nome" value="<?php echo $atualiza_produtos['produtos_nome'];?>"><br><br>
        <option value=""></option>
        <option value="Celulose">Celulose</option>
        <option value="Papel">Papel</option>
        <option value="Papel-Higienico">Papel-Higienico</option>
        </select><br><br>

        <label for="produtos_tipos">Tipos: </label>
        <select name="produtos_tipos" id="produtos_tipos" value="<?php echo $atualiza_produtos['produtos_tipos'];?>"><br><br>
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
        <select name="produtos_categoria" id="produtos_categoria" value="<?php echo $atualiza_produtos['produtos_categoria'];?>"><br><br>
        <option value=""></option>
        <option value="Composto Orgânico">Composto Orgânico</option>
        <option value="Papel">Papel</option>
        <option value="Higiene">Higiene</option>
        </select><br><br>

        <label for="produtos_quantidade">Quantidade: </label>
        <select name="produtos_quantidade" id="produtos_quantidade" value="<?php echo $atualiza_produtos['produtos_quantidade'];?>"><br><br>
        <option value=""></option>
        <option value="10">10</option>
        <option value="50">50</option>
        <option value="100">100</option>
        </select><br><br>

        <label for="produtos_gramatura">Gramatura: </label>
        <select name="produtos_gramatura" id="produtos_gramatura" value="<?php echo $atualiza_produtos['produtos_gramatura'];?>"><br><br>>
        <option value=""></option>
        <option value="75 g/m²">75 g/m²</option>
        <option value="90 g/m²">90 g/m²</option>
        <option value="50 g/m²">50 g/m²</option>
        </select><br><br>

        <label for="produtos_especificacao">Especificação: </label>
        <select name="produtos_especificacao" id="produtos_especificacao" value="<?php echo $atualiza_produtos['produtos_especificacao'];?>"><br><br>
        <option value=""></option>
        <option value="Polímero">Polímero</option>
        <option value="A4">A4</option>
        <option value="A3">A3</option>
        <option value="Cartaz">Cartaz</option>
        <option value="Mimmo">Mimmo</option>
        <option value="Scala">Scala</option>
        </select><br><br>

        <label for="produtos_cor">Cor: </label>
        <select name="produtos_cor" id="produtos_cor" value="<?php echo $atualiza_produtos['produtos_cor'];?>"><br><br>
        <option value=""></option>
        <option value="Branco">Branco</option>
        <option value="Azul">Azul</option>
        <option value="Rosa">Rosa</option>
        </select><br><br>

        <input type="submit" class="btn btn-info" value="Atualizar Produtos">
        </form>
    </fieldset>

<?php       
    require("footer.php");
?>
