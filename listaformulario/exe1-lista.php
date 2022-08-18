<?php
$nota1 = 0;
$nota2 = 0;
$nota3 = 0;
$nota4 = 0;
$media = 0;

if(isset($_POST["nota1"]) && isset($_POST["nota2"] && isset($_POST["nota3"]) && isset($_POST["nota4"])){
$nota1 = $_POST["nota"];
$nota2 = $_POST["nota"];
$nota3 = $_POST["nota"];
$nota4 = $_POST["nota"];
}else{
	header("formulario1.html")
	$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4
}
if($media>=7){
	echo "Aluno reprovado!"
}else if ($media>=5 && $media = 7){
	echo "Aluno de exame final";
	else if ($media<5){
		echo "Aluno reprovado!";

?>

