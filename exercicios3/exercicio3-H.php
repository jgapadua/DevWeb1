<?php
header("Content-Type:text/html; charset=utf8");

//variaveis
$salario = 500;
$nome = João;
$horas = 68;

//calculo
if($horas > 40 && $horas <= 60){
	$salario = $horas*20;
}
else if($horas > 60){
	$salario = $horas*25;
}

//resultado

echo "<h1>Calculo do salário</h1>";
echo "<hr>";
echo "O valor do salario será: " . $salario;