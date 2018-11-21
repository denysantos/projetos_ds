<?php

session_start();
global $pdo;
try{
    $pdo = new PDO("mysql:dbname=db_projetos;host:localhost","denny","henrique");
} catch (PDOException $ex) {
    echo "Falha de conexão com o banco de dados: ".$ex->getMessage();
    exit;
}
?>
