<?php require 'config.php';  ?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Projetos DS</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>    
    <script src="assets/js/script.js" type="text/javascript"></script>
</head>
<body>
  <nav class="navbar navbar-expanded navbar-inverse">
      <div class="menu-logo">
          <div class="navbar-brand">
              <span class="navbar-logo">
                  <a href="index.php">
                      <img src="assets/images.default.jpg">
                  </a>
              </span>
              <span class="navbar-caption-wrap">
                  <a class="navbar-caption text-black display-4" href="index.php">Projetos</a>
              </span>              
          </div>    
          <ul class="nav navbar-nav navbar-right">
              <?php 
                if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])):
                require 'classes/usuarios.class.php';

            ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="meus_projetos.php">Meus Projetos</a>
                <li><a href="sair.php">Sair</a></li>
            <?php else: ?>
                <li><a href="cadastre-se.php">Cadastre-se</a></li>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
          </ul>
      </div>
  </nav>
    

