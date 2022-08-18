<?php
header("Content-type:text/html; charset:utf8");

// variaveis para teste de nome
$codigo = "";

if(isset($_POST["código"])){
	$codigo = $_POST["código"];

}else{ 
	header("location:FORMULARIO1.html");
}

// validar nome

switch($codigo){
	case $codigo = 1: echo "Alimento nao perecivel";
	           break;
	case $codigo=2 || $codigo=3 || $codigo=4: echo"Alimento perecivel";
	           break;
	case $codigo=5 || $codigo=6 : echo"Vestuário";
	           break;
	case $codigo=7 : echo"Higiene Pessoal"; 
	           break;
	case $codigo>7 && $codigo<16  : echo"Limpeza e Utensílios Domésticos"; 
	           break;           

    default: echo "Código inválido";
}