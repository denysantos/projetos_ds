<?php 
/*Fonte: http://php.net/manual/pt_BR/language.types.array.php */


$array = array(
	"foo" => "bar",
	"bar" => "foo"
);

var_dump($array);
?>

<br>

<?php
$array = array("foo","bar","hello","world");
var_dump($array);
?>

<br>

<?php
$array = array(
		 "a",
		 "b",
	6 => "c",
		 "d"
);

var_dump($array);

?>

<br>

<?php
$array = array(
	"foo" => "bar",
	42	  => 24,
	"multi" => array(
		"dimensional" => array(
			"array" => "foo"
			)
		)
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>

<br>

<?php
function getArray(){
	return array(1,2,3);
}

?>

<br>

<?php
$arr = array(5=>1,12=>2);
$arr[] = 56;
var_dump($arr);
$arr["x"] = 42;
?>
<br>
<?php
var_dump($arr);
?>
<br>
<?php
unset($arr[5]);
var_dump($arr);
?>
<br>
<?php
unset($arr);
var_dump($arr);
?>