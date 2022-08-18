!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Base PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h3 align="center">Caixa eletrônico</h3>
			<hr />
			<form action="saque.php" method="post">
				
			  <div class="form-group">
              	<label for="parcelas">Bancos</label>
              	<select name="parcelas" class="form-control" required>
              		<option value="">Escolha o seu Banco</option>
              		<option value="24">Bradesco</option>
              		<option value="36">Banco do Brasil</option>
              		<option value="45">Caixa Econômica Federal</option>
              		<option value="45">Itaú</option>
              		<option value="45">Santander</option>
              		<option value="45">Outros</option>
              		
              	</select>
              </div> 		
			  <div class="form-group">
			  	 <label for="txtagencia">Agência</label>
			  	 <input type="text" name="txtagencia" class="form-control" required>
			  </div>
			  <div class="form-group">
			  	 <label for="txtconta">Conta</label>
			  	 <input type="text" name="txtconta" class="form-control" required>
			  </div>
			  <div class="form-group">
			  	 <label for="txtsaque">Valor a sacar</label>
			  	 <input type="number" name="txtsaque" class="form-control" required>
			  </div>
			 
              
              

               
               <div class="col-md-6">
				  <div class="form-group">
				  	 <button type="submit" class="btn btn-success btn-block">SACAR</button>
				  </div>
			  </div>
			   <div class="col-md-6">
				   <div class="form-group">
				  	 <button type="reset" class="btn btn-danger btn-block">LIMPAR</button>
				  </div>
			  </div>

			</form>	

		</div>
		<div class="col-md-4"></div>
		
	</div>
</body>

</html>