<?php
     // login e senha padrões
    $valor = $_POST["txtsaque"];
    
    // notas
    $n100 = 0;
    $n50 = 0;
    $n20 = 0;
    $n10 = 0;
    $n50 = 0;
    $n20 = 0;
    $resto = 0;


    $n100 = floor($valor / 100);
    $resto = $valor % 100;
 
    $n50 = floor($resto / 50);
    $resto = $resto % 50;
 
    $n20 = floor($resto / 20);
    $resto = $resto % 20;
 
    $n10 = floor($resto / 10);
    $resto = $resto % 10;
 
    $n5 = floor($resto / 5);
    $resto = $resto % 5;
 
    $n2 = floor($resto / 2);
    $resto = $resto % 2;



 


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Base PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        img{
            width: 300px;
            height: 200px;
        }
        label{
            font-size: 15px;
            border: 1px solid black;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
	
	<div align="center">  
     <h3 >Caixa Eletrônico</h3>
            Valor: <label><?php echo $valor; ?> </label>
            <hr>
    </div>

     <div class="row" align="center">
        <div class="col-md-4" >
            <img src="img/100reais.jpg"><br>
            <label><?php echo $n100; ?></label>
        </div>
        <div class="col-md-4">
            <img src="img/50reais.jpg"><br>
            <label><?php echo $n50; ?></label>
        </div>
        <div class="col-md-4">
            <img src="img/20reais.jpg"><br>
            <label><?php echo $n20; ?></label>
        </div>
    </div>
    <div class="row" align="center">
        <div class="col-md-4">
            <img src="img/10reais.jpg"><br>
            <label><?php echo $n10; ?></label>
        </div>
        <div class="col-md-4">
            <img src="img/5reais.jpg"><br>
            <label><?php echo $n5; ?></label>
        </div>
        <div class="col-md-4">
            <img src="img/2reais.jpg"><br>
            <label><?php echo $n2; ?></label>
        </div>
    </div>

        

   
     <div align="center">
            <a href="index.php"><button class="btn btn-primary ">Voltar</button></a>
	</div>
</body>

</html>