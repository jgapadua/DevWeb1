<?php
header("Content-Type:text/html; charset=utf8");

//pegar valor digitado pelo usuario
// $_GET["variavel"] -> valor enviado na url (sem segurança)
// $_POST["variavel"] -> valor enviado pelo formulario (seguro)

//variaveis
$nome = $_GET ["nome"];
$nota = $_GET ["nota"];
$resposta = "";

// exemplo url com variaveis
//url?nome=João&nota=70

//calculo
if($nota >= 60){
	$resposta = "Aprovado";
}
if($nota < 45){
	$resposta = "Reprovado";
}
else{
	$resposta = "Recuperação";
}

	




//resultado

echo "<h1> Notas </h1>";
echo "<hr>";
echo "Nome: ".$nome;
echo "<br>Nota:".$nota;
echo "<br>Resposta:".$resposta;