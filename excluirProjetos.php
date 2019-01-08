<?php
require 'config.php';
if(empty($_SESSION['cLogin'])){
    header("Location: login.php");
    exit;
}


require 'classes/projetos.class.php';

$p = new Projetos();


if(isset($_GET['id']) && !empty($_GET['id'])) {
    $p->excluirProjeto($_GET['id']);
}

header("Location: meus_projetos.php");

?>



