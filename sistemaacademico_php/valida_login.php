<html>
<head>
    
    <title>Sistema Acadêmico - 2.0</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php

if (isset ($_POST["email"]) && isset ($_POST["senha"])){
   $email = $_POST ["email"];
   $senha = $_POST ["senha"];
}else{
	header ("location: login.php");
}


$login_professor = "professor@professor.com";
$senha_professor = "1234";


if ($login_professor == $email &&  $senha_professor == $senha){
	header ("location: lancamentos.php");
}
 else {echo "INVALIDO";}

?>

</body>

</html>
