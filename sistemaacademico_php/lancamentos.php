<html>
<head>
    
    <title>Sistema Acadêmico - 2.0 </title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action ="valida_lancamentos.php" method="post">
				<div class="form-group">
		<label for="disciplina">Disciplina</label>
		<input type="name" name="disciplina" class="form-control">
	</div>
<div class="form-group">
		<label for="data">Data</label>
		<input type="date" name="data" class="form-control">
	</div>
	<div class="form-group">
		<label for="aluno">Aluno</label>
		<input type="name" name="aluno" class="form-control">
	</div>
	<div class="form-group">
		<label for="notaPI">P.I</label>
		<input type="double" name="notaPI" class="form-control">
	</div>
	<div class="form-group">
		<label for="notaPR">PROJETOS</label>
		<input type="double" name="notaPR" class="form-control">
	</div>
	<div class="form-group">
		<label for="notaPT">P.T</label>
		<input type="double" name="notaPT" class="form-control">
	</div>
	<div class="row">
		<div class="col-md-6">
		<button type="submit" name="Imprimir" value="Imprimir" class="btn btn-success btn-block">Imprimir</button>
	</div>
	<div class="col-md-6">
		<button type="reset" name="Limpar" value="Limpar" class="btn btn-danger btn-block">Limpar</button>
	</div>
</div>
	</form>


		</div>
		<div class="col-md-4"></div>
	</div>
		
</body>

</html>