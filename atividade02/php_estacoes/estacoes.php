
<html>
<head>
    
    <title>Sistema de Estacoes do Ano - 1.0</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


<?php

if (isset ($_POST["mes"])){
   $mes = $_POST ["mes"];
}else{
	header ("location: index.php");
}


switch($mes){
	case "JAN":
		echo "inverno";
		echo "<img src=inverno.jpg>";
		break;
		case "FEV":
		echo "inverno";
		echo "<img src=inverno.jpg>";
		break;
		case "MAR":
		echo "inverno";
		echo "<img src=inverno.jpg>";
		break;
		case "ABR":
		echo "primavera";
		echo "<img src=primavera.jpg>";
		break;
		case "MAI":
		echo "primavera";
		echo "<img src=primavera.jpg>";
		break;
		case "JUN":
		echo "primavera";
		echo "<img src=primavera.jpg>";
		break;
		case "JUL":
		echo "verao";
		echo "<img src=verao.jpg>";
		break;
		case "AGO":
		echo "verao";
		echo "<img src=verao.jpg>";
		break;
		case "SET":
		echo "verao";
		echo "<img src=verao.jpg>";
		break;
		case "OUT":
		echo "outono";
		echo "<img src=outono.jpg>";
		break;
		case "NOV":
		echo "outono";
		echo "<img src=outono.jpg>";
		break;
		case "DEZ":
		echo "outono";
		echo "<img src=outono.jpg>";
		break;
	
	
}



?>


</body>

</html>