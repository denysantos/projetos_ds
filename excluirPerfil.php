<?php
require 'config.php';
if(!empty($_SESSION['cLogin'])){
    header("Location: login.php");
    exit;
}

require 'classes/perfil.class.php';

$a = new Perfil();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $a->excluiPerfil($_GET['id']);
}

header("Location: perfil.php");