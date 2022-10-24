<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzano</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .imglogo{
        width:10%;
        top: 2%;
        position: absolute;
    }
    .button{
        display: flex;
        top: 1.5%;
        right:3%;
        position: absolute;
    }
    .conecte{
        width:2.5%;
        top: 1.8%;
        position: absolute;
        right:8.5%;
    }
</style>
<body>
    
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">A Suzano</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">História</a></li>
      <li><a class="dropdown-item" href="#">Plural</a></li>
      <li><a class="dropdown-item" href="#">Nóticias</a></li>
    </ul>
  </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Produtos</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Celulose</a></li>
      <li><a class="dropdown-item" href="#">Papel</a></li>
      <li><a class="dropdown-item" href="#">Higiene</a></li>
      <li><a class="dropdown-item" href="#">Lignina</a></li>
      <li><a class="dropdown-item" href="#">Eucafluff</a></li>
    </ul>
   </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Fale Conosco</a>
    </li>
  </ul>
</nav>
<img src="img/logosuzano.png" class="imglogo" alt="logo"> 
<img src="img/conecte-se.png" class="conecte" alt="conectar">
<div class="button">
<a href="login.php"><button type="button"  class="btn btn-success">Login</button></a>
</div>
</body>
</html>