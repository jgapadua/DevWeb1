
<html>
<head>
    
    <title>Sistema de Estacoes do Ano - 1.0 </title>
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
			<form action ="estacoes.php" method="post">
				<div class="form-group">
		<label for="mes">Mes</label>
		<select name="mes" class="form-control">
			<option value="JAN">JANEIRO </option>
			<option value="FEV">FEVEREIRO </option>
			<option value="MAR">MARCO</option>
			<option value="ABR">ABRIL </option>
			<option value="MAI">MAIO </option>
			<option value="JUN">JUNHO</option>
			<option value="JUL">JULHO </option>
			<option value="AGO">AGOSTO </option>
			<option value="SET">SETEMBRO</option>
			<option value="OUT">OUTUBRO </option>
			<option value="NOV">NOVEMBRO </option>
			<option value="DEZ">DEZEMBRO</option>
		</select>
	</div>
	<div class="row">
		<div class="col-md-12">
		<button type="submit" name="Entrar" value="Entrar" class="btn btn-success btn-block">Ver estacao</button>
	</div>
</div>
	</form>


		</div>
		<div class="col-md-4"></div>
	</div>
	
	
</body>

</html>