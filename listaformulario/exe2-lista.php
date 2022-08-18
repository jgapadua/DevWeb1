<?php
header("Content-type=text/html; charset=utf8");

$n1=0;
$resposta = "";

if($n1>0 && $n1<3){
	$resposta= "Numero menor que 3";
}else if ($n1>0 && $n1>25){
	$resposta= "Numero maior que 25";
}else if ($n1>0 && $n1<25){
	$resposta= "Numero maior que 3 e menor que 25";

echo $resposta;
}

?>

