<?php
?>

<!DOCTYPE html>
<html>
<head>

    <title>Eleição</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Eleição</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="menu.php">Home</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="Cargos/cadastrar.php">Cargos</a></li>
                    <li><a href="Partidos/cadastrar.php">Partidos</a></li>
                    <li><a href="Candidatos/cadastrar.php">Candidatos</a></li>
                    <li><a href="Eleitores/cadastrar.php">Eleitores</a></li>
                    <li><a href="Urna/cadastrar.php">Urna</a></li>
                </ul>
            </li>
            </li>

            <li class ="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Votação
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Eleição</a></li>
                    <li><a href="#">Voto</a></li>

                </ul>
            </li>


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatórios
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Votos por Candidato</a></li>
                    <li><a href="#">Votos por Partidos</a></li>

                </ul>
            </li>
            <li><a href="#">Sobre</a><li>
            <li><a href="#">Sair</a><li>


        </ul>
    </div>
</nav>

<div class="row">

  <div class="col-md-4" align="center"><br><br><br><br><br><br><br><br><br><br><b>INICIAR VOTAÇÃO</b><br><img src="img/voto4.jpg" /></div>

  <div class="col-md-4" align="center"><br><br><br><br><br><br><br><br><br><br><b>VOTAR</b><br><br><img src="img/voto.jpg" /></div>

  <div class="col-md-4" align="center"><br><br><br><br><br><br><br><br><br><br><b>RESULTADO</b><BR><br><img src="img/APURACAO.jpg" /></div>
</div>



</body>
</html>