<?php
//Fonte: http://php.net/manual/pt_BR/language.types.array.php

error_reporting(E_ALL);
ini_set('display_errors',true);
ini_set('html_errors',false);

$array = array(1,2);
$count = count($array);
for ($i=0;$i<$count;$i++){
	echo "\nVerificando $i: \n";
	echo "Ruim: ".$array['$i']."\n";
	echo "Bom: ".$array[$i]."\n";
	echo "Ruim: {$array['$i']}\n";
	echo "Bom: {$array[$i]}\n";
}

?>