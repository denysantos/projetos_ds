<?php
require 'config.php';
if(empty($_SESSION['cLogin'])){
    header("Location: login.php");
    exit;
}


require 'classes/pessoaFisica.class.php';

$p = new Pessoa();


if(isset($_GET['id']) && !empty($_GET['id'])) {
    $p->excluirPessoa($_GET['id']);
}

header("Location: add_pessoa.php");

