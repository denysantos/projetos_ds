<?php
error_reporting(E_ALL);
require 'classes/usuario.class.php';

$base = new Usuario();
echo '<pre>';
print_r($base);
echo '</pre>';
?>