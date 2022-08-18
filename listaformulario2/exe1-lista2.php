<?php
header("Content-type=text/html; charset=utf8");

$anonascimento=$_POST["anonascimento"];



$resposta = "";

if((2018-$anonascimento)>=16){
	$resposta= "Pode votar.";
}else{
	$resposta= "Não pode votar.";
}
	
echo $resposta;



?>
