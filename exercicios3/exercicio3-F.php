<?php
header("Content-Type:text/html; charset=utf8");

//variaveis
$produtos =25;
$total =60 ;
$resposta = "";

//calculo
if($produtos <= 10){
	$resposta = "Não haverá desconto";
}
else if($produtos >= 11 && $produtos < 25){
	$resposta = "O desconto será de 5%";
}
else if($produtos >= 25){
	$resposta = "O desconto será de 12%";
}

	




//resultado

echo "<h1>O desconto de uma compra</h1>";
echo "<hr>";
echo "$resposta";