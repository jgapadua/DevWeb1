<?php
header("Content-type:text/html; charset:utf8");

// variaveis para teste de nome
$mes = "";

if(isset($_POST["mes"])){
	$Fmes = $_POST["mes"];

}else{ 
	header("location:FORMULARIO3.html");
}

// validar nome

switch($Fmes){
	case '1': echo "alta temporada";
	           break;
	case '2': echo "alta temporada";
	           break;
	case '3': echo "baixa temporada";
	           break;
	case '4': echo "baixa temporada";
	           break;
	case '5': echo "baixa temporada";
	           break;
	case '6': echo "alta temporada";
	           break;
	case '7': echo "alta temporada";
	           break;
	case '8': echo "baixa temporada";
	           break;
	case '9': echo "baixa temporada";
	           break;
	case '10': echo "baixa temporada";
	           break;
    case '11': echo "baixa temporada";
	           break;
	case '12': echo "alta temporada";
	           break;
    default: echo "invalido";
}