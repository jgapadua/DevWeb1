<?php
header("Content-Type:text/html; charset=utf8");

//pegar valor digitado pelo usuario
// $_GET["variavel"] -> valor enviado na url (sem segurança)
// $_POST["variavel"] -> valor enviado pelo formulario (seguro)

//variaveis
$nome = $_GET ["nome"];
$idade = $_GET ["idade"];
$resposta = "";

// exemplo url com variaveis
//url?nome=João&idade=17

//calculo
if($idade >= 18){
	$resposta = "Pode tirar habilitação";
}else{
	$resposta = "Falta ".(18 - $idade)." anos para tirar a habilitação";
}



//resultado

echo "<h1>Habilitação </h1>";
echo "<hr>";
echo "Nome: ".$nome;
echo "<br>Idade:".$idade;
echo "<br>Resposta:".$resposta;