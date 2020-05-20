<!DOCTYPE html>
<html>
<head>
	<title>Ajouter Pettion</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

	<div class="container mt-5">
		<h2 class="text-center mb-4">Ajout d'une nouvelle petition</h2>
		<form action="AjtPetition.php" method="POST">
		<input type="text"  class="form-control mb-3" name="Titre" placeholder="Titre">
		<input type="text"  class="form-control mb-3" name="Description" placeholder="Description">
		<input type="submit"  class="form-control btn-primary" name="ajouter">
		</form>
	</div>
</body>
</html>