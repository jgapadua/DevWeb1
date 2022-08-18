<?php
header("Content-Type:text/html; charset=utf8");

//pegar valor digitado pelo usuario
// $_GET["variavel"] -> valor enviado na url (sem segurança)
// $_POST["variavel"] -> valor enviado pelo formulario (seguro)

//variaveis
$senha = $_GET ["senha"];
$confirmasenha = $_GET ["confirmasenha"];
$resposta = "";

// exemplo url com variaveis
//url?senha=123&confirmasenha=123

//calculo
if($senha == $confirmasenha){
	$resposta = "Senha são iguais";
}else{
	$resposta = "As senhas não conferem.";
}



//resultado

echo "<h1>Teste de Senhas</h1>";
echo "<hr>";
echo "Validando a senha: ".$resposta;