<?php       
    require("header_cliente.php");
    session_start();
    $usuario = $_SESSION['usuario'];
?>
<?php 
        if($usuario['perfil'] != "admin")
        {
            echo "Você não tem permissão de acesso!"; 
        }
        else
        {
          ?>
          <style>
            .teste{
                text-align:center;
            }
            .painel{
                background:lightgreen;
                width:60%;
                position:relative;
                left:20%;
            }
            .imgpainel1{
                width:80%;
                height:30%;
                position:relative;
                left:10%;
            }
            .imgpainel2{
                width:80%;
                height:30%;
                position:relative;
                left:10%;
            }
            .imgpainel3{
                width:80%;
                height:30%;
                position:relative;
                left:10%;
            }
            .imgpainel4{
                width:80%;
                height:30%;
                position:relative;
                left:10%;
            }
            .imgpainel5{
                width:80%;
                height:30%;
                position:relative;
                left:10%;
            }
            .produtostexto{
                position: relative;
                text-align:center;
            }
          </style>
            <main>
                <h3 class="teste">Seja bem-vindo, <?php print $usuario['login'];?> </h3>
                <div class="painel">
                    <p class="produtostexto">CELULOSE</p>
                    <img src="img/celulose.jpg" class="imgpainel1" alt="">
                    <p class="produtostexto">PAPEL</p>
                    <img src="img/papel.jpg" class="imgpainel2" alt="">
                    <p class="produtostexto">PAPEL HIGIENICO</p>
                    <img src="img/papelhigienico.jpg" class="imgpainel3" alt="">
                    <p class="produtostexto">LIGNINA</p>
                    <img src="img/lignina.png" class="imgpainel4" alt="">
                    <p class="produtostexto">EUCAFLUFF</p>
                    <img src="img/eucafluff.png" class="imgpainel5" alt="">
                </div><br><br>
            </main>
        
        <?php 
        }?>    

<?php       
    require("footer.php");
?>
            
        
