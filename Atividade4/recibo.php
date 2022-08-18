<!DOCTYPE html>
<html>
<head>
    
    <title>Biblioteca</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php 

header("content-type:text/html; charset=utf8");
$nomedolivro = 0;
$nomedousuario = 0;
$dataemprestimo = 0;
$datadevolucao = 0;
$tipo = '';

if(isset($_GET["nome"]) ){
	$nomedousuario = $_GET["nome"];

}else{
	header("location:emprestimo.php");
}

switch ($tipo) {
	        case 'A':
				if(isset($_GET["tipo"])){
	$nomedolivro = $_GET["A"];
}else{
	echo "Pequeno Principe"
}
		    break;
		    case 'B':
				if(isset($_GET["tipo"])){
	$nomedolivro = $_GET["B"];
}else{
	echo "Tres Porquinhos"
}
			break;
					    case 'C':
				if(isset($_GET["tipo"])){
	$nomedolivro = $_GET["C"];
}else{
	echo "Inferno"
}
			break;
					    case 'D':
				if(isset($_GET["tipo"])){
	$nomedolivro = $_GET["D"];
}else{
	echo "Escaravelho do Diabo"
}
			break;
					    case 'E':
				if(isset($_GET["tipo"])){
	$nomedolivro = $_GET["E"];
}else{
	echo "Branca de Neve"
}
			break;
					    case 'F':
				if(isset($_GET["tipo"])){
	$nomedolivro = $_GET["F"];
}else{
	echo "Turma da Monica"
}
			break;

	default: 
		echo "Opção incorreta";
		break;
}


}else{
	echo "<br><a href=emprestimo.php>Voltar</a>";
}

?>

						
	
</body>

</html>

