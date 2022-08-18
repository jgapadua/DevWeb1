<?php
header("Content-Type:text/html; charset=utf8");

//variaveis
$pessoas = 10;
$conta = 100;
$desconto = 0;
$cadapessoa = 0;

//calculo
if($conta > 50){
	$desconto = 0.95;
}
else if($conta > 80){
	$desconto = 0.92;
}
else {
	$desconto = 0.9;
}
$conta = $conta*$desconto;
$cadapessoa = $conta/$pessoas;
	

//resultado

echo "<h1>O preço da conta</h1>";
echo "<hr>";
echo "O valor da conta será de $conta e cada pessoa pagará $cadapessoa rais";