<?php
header("Content-type:text/html; charset:utf8");

// variaveis para teste de nome
$mes = "";

if(isset($_POST["mes"])){
	$Fmes = $_POST["mes"];

}else{ 
	header("location:FORMULARIO2.html");
}

// validar nome

switch($Fmes){
	case '1': echo "31 dias, no ano de 2018";
	           break;
	case '2': echo "28 dias, no ano de 2018";
	           break;
	case '3': echo "31 dias, no ano de 2018";
	           break;
	case '4': echo "30 dias, no ano de 2018";
	           break;
	case '5': echo "31 dias, no ano de 2018";
	           break;
	case '6': echo "30 dias, no ano de 2018";
	           break;
	case '7': echo "31 dias, no ano de 2018";
	           break;
	case '8': echo "31 dias, no ano de 2018";
	           break;
	case '9': echo "30 dias, no ano de 2018";
	           break;
	case '10': echo "31 dias, no ano de 2018";
	           break;
    case '11': echo "30 dias, no ano de 2018";
	           break;
	case '12': echo "31 dias, no ano de 2018";
	           break;
    default: echo "invalido";
}