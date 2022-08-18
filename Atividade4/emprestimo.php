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
	
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="emprestimo.php" method="post">
				<div class="form-group">
					<label for="nome">Nome do Usuário</label>
					<input type="text" name="nome" class="form-control">
				</div>
				<div class="form-group">
					<label for="tipo">Tipo de Usuário</label>
					<select name="tipo" class="form-control">
							<option value="1">Aluno</option>
							<option value="2">Professor</option>
						</select>
				</div>
				<div class="form-group">
					<label for="data">Data de Empréstimo</label>
					<input type="text" name="data" class="form-control">
				</div>
				<div class="form-group">
					<label for="tipo">Nome do Livro</label>
					<select name="tipo" class="form-control">
							<option value="A">Pequeno Principe</option>
							<option value="B">Três Porquinhos</option>
							<option value="C">Inferno</option>
							<option value="D">Escaravelho do Diabo</option>
							<option value="E">Branca de Neve</option>
							<option value="F">Turma da Mônica Jovem</option>
					</select>
				</div>
				<div class="form-group">
					<label for="data">Data de Devolução</label>
					<input type="text" name="data" class="form-control">
				</div>
				<div class="row">
					<div class="col-md-6">
						<button type="submit" class="btn btn-success btn-block">Recibo</button>
					</div>
					<div class="col-md-6">
						<button type="reset" class="btn btn-danger btn-block">Limpar</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>

	</div>



	

</body>

</html>