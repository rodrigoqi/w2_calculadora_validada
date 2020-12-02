<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--Tags básicas do head-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Introdução ao PHP</title>
	<!--Link dos nossos arquivos CSS e JS padrão-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/scripts.js"></script>
	<!--Link dos arquivos CSS e JS do Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container">
		<br>
		<div class="row text-center">
			<div class="col-md-12">
				<img src="img/calc.png">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Calculadora simples com PHP</h1>
			</div>
		</div>

		<form action="index.php" method="get">
			<br>
			<div class="row text-center">
				<div class="col-md-12">
					Valor 1<br>
					<input type="text" name="valor1" size="10" value="">
				</div>
			</div>

			<br>
			<div class="row text-center">
				<div class="col-md-12">
					Valor 2<br>
					<input type="text" name="valor2" size="10" value="">
				</div>
			</div>

			<br>
			<div class="row text-center">
				<div class="col-md-12">
					Selecione a operação<br>
					<select name="operacao">
						<option>Somar</option>
						<option>Subtrair</option>
						<option>Multiplicar</option>
						<option>Dividir</option>
					</select>
				</div>
			</div>	

			<br>
			<div class="row text-center">
				<div class="col-md-12">
					<input type="submit" name="btnCalcular" value="Calcular">
				</div>
			</div>

			<br>
			<div class="row text-center">
				<div class="col-md-2 offset-md-5" id="display">
		
				<?php
					
					if(isset($_GET["valor1"])){
						$v1 = $_GET["valor1"];
						$v2 = $_GET["valor2"];
						$op = $_GET["operacao"];

						if(is_numeric($v1) && is_numeric($v2)){
							if($op=="Somar"){
								$resultado = $v1 + $v2;
							}
	
							if($op=="Subtrair"){
								$resultado = $v1 - $v2;
							}
	
							if($op=="Multiplicar"){
								$resultado = $v1 * $v2;
							}
	
							if($op=="Dividir"){
								if($v2==0){
									$resultado = "Não é possível";
								} else {
									$resultado = $v1 / $v2;
								}
							}
	
							echo "$resultado";		
						} else {
							echo "valor inválido";		
						}


						

					}
					


				?>

				</div>
			</div>

		</form>

	</div>
</body>

</html>