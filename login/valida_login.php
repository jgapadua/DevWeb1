
<!DOCTYPE html>
<html>
<head>
    
    <title>Sistema Acadêmico - 1.0</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>


<?php

if (isset ($_POST["email"]) && isset ($_POST["senha"]) && isset ($_POST["tipo"])){
   $email = $_POST ["email"];
   $senha = $_POST ["senha"];
   $tipo = $_POST ["tipo"];
}else{
	header ("location: login.php");
}


$login_aluno = "aluno@aluno.com";
$senha_aluno = "1234";

$login_professor = "professor@professor.com";
$senha_professor = "1234";

$login_funcionario = "funcionario@funcionario.com";
$senha_funcionario = "1234";

if ($login_aluno == $email && $tipo == "A" && $senha == $senha_aluno){
	header ("location: aluno.html");
}else if ($login_professor == $email && $tipo == "P" && $senha == $senha_professor){
	header ("location: professor.html");

}else if ($login_funcionario == $email && $tipo == "F" && $senha == $senha_funcionario){
header ("location: funcionario.html");

} else {echo "INVALIDO";}



?>


</body>

</html>