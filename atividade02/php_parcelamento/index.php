
<html>
<head>
    
    <title>Sistema de Parcelas - 1.0 </title>
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
			<form action ="parcelamento.php" method="post">
				<div class="form-group">
		<label for="emprestimo">Valor do Emprestimo</label>
		<input type="number" name="emprestimo" class="form-control">
	</div>
				<div class="form-group">
		<label for="parcelas">Parcelas</label>
		<select name="parcelas" class="form-control">
			<option value="24">24x </option>
			<option value="36">36x </option>
			<option value="48">48x</option>
			
		</select>
	</div>
	<div class="row">
		<div class="col-md-12">
		<button type="submit" name="Calcular" value="Calcular" class="btn btn-success btn-block">Calcular</button>
	</div>
</div>
	</form>


		</div>
		<div class="col-md-4"></div>
	</div>
	
	
</body>

</html>