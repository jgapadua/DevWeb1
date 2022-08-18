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

if (isset ($_POST["disciplina"]) && isset ($_POST["data"]) && isset ($_POST["aluno"]) && isset ($_POST["notaPI"]) && isset ($_POST["notaPR"]) && isset ($_POST["notaPT"]){
   $disciplina = $_POST ["disciplina"];
   $data = $_POST ["data"];
   $aluno = $_POST ["aluno"];
   $notaPI = $_POST ["notaPI"];
   $notaPR = $_POST ["notaPR"];
   $notaPT = $_POST ["notaPT"];
}else{
	header ("location: lancamentos.php");
}


$disiciplina= "";
$data = date;
$aluno = "";
$notaPI = 0;
$notaPR = 0;
$notaPT = 0;

if ($disciplina == $disciplina &&  $data == $data && $aluno == $aluno && $notaPI=$notaPI && $notaPR == $notaPR && $notaPT == $notaPT ){
	header ("location: boletim.php");
}
 else {echo "INVALIDO";}

?>

</body>

</html>
