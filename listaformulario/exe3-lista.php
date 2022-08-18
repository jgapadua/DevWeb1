<?php
header("Content-type=text/html; charset=utf8");

$n1=0;
$n1= $_POST ["n1"];
$resposta= "";

if($n1%2==0){
	$resposta="par";
}else{
	$resposta="impar";
}

echo "Seu numero é ".$resposta;

?>