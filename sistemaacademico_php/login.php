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
			<form action ="valida_login.php" method="post">
				<div class="form-group">
		<label for="email">E-mail/Usuario do Professor</label>
		<input type="email" name="email" class="form-control">
	</div>
<div class="form-group">
		<label for="senha">Senha</label>
		<input type="password" name="senha" class="form-control">
	</div>
	<div class="row">
		<div class="col-md-6">
		<button type="submit" name="Entrar" value="Entrar" class="btn btn-success btn-block">Entrar</button>
	</div>
	<div class="col-md-6">
		<button type="reset" name="Sair" value="Sair" class="btn btn-danger btn-block">Sair</button>
	</div>
</div>
	</form>


		</div>
		<div class="col-md-4"></div>
	</div>
		
</body>

</html>