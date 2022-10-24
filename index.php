<?php       
    require("header.php");
?>
<style>
    .fundo{
        width: 100%;
        height:82%;
        position: absolute;

    }
    .montanha{
        width: 100%;
        height: 80%;
        position: absolute;
    }
    .slogan{
        width:10%;
        left:40%;
        top:35%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin:5%;
        background-color:lightgreen;
        color:white;
        position: absolute;
    }
    .slogan1{
        width:10%;
        left:40%;
        top:41%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin:5%;
        padding-left:0;
        background-color:lightgreen;
        color:white;
        position: absolute;
    }
    .slogan2{
        width:10%;
        left:40%;
        top:47%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin:5%;
        background-color:lightgreen;
        color:white;
        position: absolute;
        padding-left:0%;
    }
    .plantar{
        
        font-size:5%;
    }
    .fundoazul{
        width:50%;
        height: 100%;
    }
    .evoce{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
    .branco{
        width:100%;
        height:100%;
    }
</style>
<main>
    <section>
        <img src="img/montanha.jpg" class="montanha" alt="montanha">
        <img src="img/fundosuzano.png" class="fundo" alt="fundo">
        <p class="slogan" >NÓS</p>
        <p class="slogan1" >PLANTAMOS O</p>
        <p class="slogan2" >FUTURO</p>
        <p class="plantar">PLANTAR</p>
        <img src="img/fundosuzano.png" class="branco" alt="branco">
    </section>
    
 

<?php       
    require("footer.php");
?>