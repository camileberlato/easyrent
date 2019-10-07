<?php
//session_start();
//$_SESSION['tipo'] = ['tipo_usuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<link rel="shortcut icon" type="image/x-icon" href="img/8258logo1.ico">
<style>
@import url('https://fonts.googleapis.com/css?family=Maven+Pro&display=swap');
body{
  overflow-x: hidden;
}
#carouselExampleIndicators{
  width: 100%;
}
footer {
            background-color: #6896c0;
        }
#redes img {
            width: 1.5%;
            height: 1.5%;
            opacity: 0.7;
        }
#margin {
         margin-left: 1.5rem;
         margin-top: 0.1rem;
         margin-bottom: 0%;
        }
nav a{
        color: white;
        font-family: 'Maven Pro', sans-serif;
        font-size: ;
        }
td, tr{
  text-align: center;
}
.filtro{
  float: right;
}
.veiculos{
  float: left;
}

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy Rent</title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>libs/MaterialDesign-Webfont-master/css/materialdesignicons.css">
    <script src="<?php echo BASEURL; ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/bootstrap.js"></script>
</head> 
<body>


    <nav class="navbar navbar-expand-lg" style="background-color: #6896c0;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo BASEURL ?>index.php"><img src="img/logo1.jpg" width="120px"><span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo BASEURL ?>sobrenos.php">SOBRE NÓS</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo BASEURL ?>ondeencontrar.php">ONDE ENCONTRAR</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                VEÍCULOS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php //if($_SESSION['tipo'] == 5){?>
              <a class="dropdown-item" href="<?php echo BASEURL . '/veiculos/' ?>list.php">Veiculos</a>
              <?php //} ?>
              <a class="dropdown-item" href="<?php echo BASEURL . '/veiculos/' ?>add.php">Cadastro de Veiculos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Algo mais aqui</a>
              </div>
            </li>
            <?// if($_SESSION['tipo'] == 4 && $_SESSION['tipo'] == 6){?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CLIENTES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BASEURL . '/clientes/' ?>list.php">Clientes</a>
                <a class="dropdown-item" href="<?php echo BASEURL . '/clientes/' ?>add.php">Cadastro de Clientes</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Algo mais aqui</a>
              </div>
            </li>
            <?php //}?>
            <?php //if($_SESSION['tipo'] == 6){?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                FUNCIONÁRIOS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BASEURL . '/funcionarios/' ?>list.php">Funcionários</a>
                <a class="dropdown-item" href="<?php echo BASEURL . '/funcionarios/' ?>add.php">Cadastro de Funcionários</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Algo mais aqui</a>
              </div>
            </li>
            <?php //} ?>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a class="nav-link" href="<?php echo BASEURL . '/login/'?>">Login</a>           
          </form>
        </div>
      </nav>