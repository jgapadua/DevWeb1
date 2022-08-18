<?php
header("Content-Type:text/html; charset=utf8");

//pegar valor digitado pelo usuario
// $_GET["variavel"] -> valor enviado na url (sem segurança)
// $_POST["variavel"] -> valor enviado pelo formulario (seguro)

//variaveis
$nome = $_GET ["nome"];
$preco = $_GET ["preco"];
$resposta = 0;

// exemplo url com variaveis
//url?nome=Tilapia&preco=90

//calculo
if($preco<100){
	// preco - (preco * 10/100)
	$resposta = $preco * 0.9;
}else{
	$resposta = $preco * 0.95;
}



//resultado

echo "<h1>Promoção da semana </h1>";
echo "<hr>";
echo "Produto: ".$nome;
echo "<br>Preço: R$ - ".number_format($preco,2);
echo "<br>Desconto: R$ - ".number_format($resposta,2);