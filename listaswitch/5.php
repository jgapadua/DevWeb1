<?php
header("Content-type:text/html; charset:utf8");

// variaveis para teste de nome
$idade = "";

if(isset($_POST["idade"])){
	$Fidade = $_POST["idade"];

}else{ 
	header("location:FORMULARIO5.html");
}

// validar nome

switch($Fidade){
	case $Fidade < 10: echo "Voce vai pagar: " .(100+80) ." Reais";
	           break;
	case $Fidade < 30: echo"Voce vai pagar: " .(100+50) ." Reais";
	           break;
	case $Fidade < 60 : echo"Voce vai pagar: " .(100+95) ." Reais";
	           break;
	case $Fidade >= 61 : echo"Voce vai pagar: " .(100+130) ." Reais";
    default: echo "invalido";
}