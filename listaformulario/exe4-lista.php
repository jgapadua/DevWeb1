<?php
header("Content-type=text/html; charset=utf8");

$n1=0;
$n2=0;
$n3=0;

$n1= $_POST["n1"]
$n2= $_POST["n2"]
$n3= $_POST["n3"]

$resposta="";

if($n1>$n2&&$n1>$n3){
	$resposta= "Numero 1 é o maior";
}else if ($n2>$n1&&$n2>$n3){
	$resposta= "Numero 2 é o maior";
}else{
	$resposta= "Numero 3 é o maior";
}
echo "O número maior é o ".$resposta;

?>