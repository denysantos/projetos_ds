<?php
/*Fonte: http://php.net/manual/pt_BR/language.types.array.php */
//Criando um array normal

$array = array(1,2,3,4,5);
print_r($array);
?>

<br>

<?php
//apagando todos os itens mas deixando o array intacto.
foreach ($array as $i => $value) {
	unset($array[$i]);
}
print_r($array);

?>

<br>

<?php
//Acrescentando um item (note que a chave é 5 ao invés de zero)
$array[] = 6;
print_r($array);

?>

<br>

<?php
//Reindexando
$array = array_values($array);
$array[] = 7;
print_r($array);

?>