<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Table de Multiplication</title>
</head>
<body>
	<div class="container border border-primary border-4 mt-4 rounded">
		<div>
		<form class="container-fluid row" name="form" method="post">
			<p class="mt-3">Entrez un nombre</p>
			<input class="col-3" type="number" name="nombre"><br><br>
		<input class="col-3 ms-3"class="btn btn-primary" type="submit" value="Afficher" name="afficher"><br><br>	
		</form>	
		</div>			
<div class="container-fluid mt-4 fw-bold border border-primary border-4 mb-4 rounded rounded-3">
	<?php 

		@$x = $_POST['nombre'];
		@$affiche = $_POST['afficher'];
		if($x)
			for($i=1; $i<=10; $i++) {
				$somme = $x * $i;
				echo "$x * $i = $somme<br>";
			}
		?>
</div>
</div>
</body>
</html>