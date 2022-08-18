<?php   
header("Content-type:text/html;charset=utf8");
require_once("Candidatos.php");
$candidato = new Candidatos();
if(isset($_GET['numero']))
{
    $lista = $candidato->listarNumero($_GET['numero']);
    $lista2 = $candidato->SelectPartidos();
    $lista3 = $candidato->SelectCargos();
}


if(isset($_POST["salvar"]))
{
    $candidato->alterar();
}   
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Eleição</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid"> 
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Eleição</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Cadastro
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="../cargos/index.php">Cargos</a></li>
                <li><a href="../partidos/index.php">Partidos</a></li>
                <li><a href="../candidatos/index.php">Candidatos</a></li>
                <li><a href="../eleitores/index.php">Eleitores</a></li>
                <li><a href="../urna/index.php">Urna</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatórios
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Votos por Candidatos</a></li>
                <li><a href="#">Votos por Partidos</a></li>
            </ul>
        </li>
        <li><a href="../Sobre.html">Sobre</a></li>
        <li><a href="../">Sair</a></li>
    </ul>
  </div>
</nav>
	
<div class="container">
    <div class="row">
    	<div class="col-md-4"></div>
	    <div class="col-md-4"></div>
	    <div class="col-md-4"></div>  
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <form action="alterar.php?numero=<?php echo $lista->Numero; ?>" method="post">
              <div class="form-group">
                <label for="Nome">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $lista->Nome;?>">
            </div>
            <div class="form-group">
                <label for="Endereço">Endereço</label>
                <input type="text" class="form-control" name="endereco" value="<?php echo $lista->Endereco;?>">
            </div>
            <div class="form-group">
                <label for="Cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" value="<?php echo $lista->Cidade;?>">
            </div>
            <div class="form-group">
                <label for="UF">UF</label>
                <input type="text" class="form-control" name="UF" value="<?php echo $lista->UF;?>">
            </div>
            <div class="form-group">
                <label for="Foto" >Foto:</label>
                <input type="text" value="<?php echo $lista->Foto; ?>" name="foto" id="file"/>
            </div>
                
            <div class="form-group">
                <label for="Nome">Idade</label>
                <input type="numeric" class="form-control" name="idade" value="<?php echo $lista->Idade;?>">
            </div>
            <div class="form-group">
                <label for="Tipo">Partido</label>
                <select name="partido" class='form-control'>
                    <?php foreach ($lista2 as $partido) :?>
                        <option value="<?php echo $partido->Codigo;?>"><?php echo $partido->Nome;?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="Tipo">Cargo</label>
                <select name="cargo" class="form-control">
                    <?php foreach ($lista3 as $cargo) :?>
                    <option value="<?php echo $cargo->Codigo;?>"><?php echo $cargo->Nome;?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group col-md-6" style="padding:4.15px;">
                <button type="submit" name="salvar" class="btn btn-success form-control">Salvar</button>
            </div>
            <div class="form-group col-md-6" style="padding:4.15px;">
                <button type="reset" class="btn btn-danger form-control">Limpar</button>
            </div>
                
        </form>
        </div>
    </div>
</div>
</body>
</html>
