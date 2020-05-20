<?php
include_once("Classes/Petition.php");
require("Model.php");
$m = new Model();
$petitions = $m->listePetitions();
?>
<!DOCTYPE html>
<html>
<head>
	<title>petitions</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container pt-4">
		<h1 class="text-center mb-5">Gestion des petitions </h1>
		<a href="Signature.php"><button class="float-right btn-primary mb-4">Signer une pétition</button></a>
		<a href="AjouterPetition.php"><button class="float-left btn-primary mb-4">Ajouter une pétition</button></a>
		<br><br>
		<div class="d-flex">
		<p>Hot Petition:</p><h3 id="hot"></h3>
		</div>
	<table class="table">
		<tr>
			<th scope="col">IDP</th>
			<th scope="col">Titre</th>
			<th scope="col">Description</th>
			<th scope="col">DatePublic</th>
		</tr>

		<?php foreach($petitions as $petition){ 
			echo "<tr>";
			echo "<td>".$petition->IDP."</td>";
			echo "<td>".$petition->Titre."</td>";
			echo "<td>".$petition->Description."</td>";
			echo "<td>".$petition->DatePublic."</td>";
			echo "</tr>";
		}
			?>
				</table>
			</div>
</body>
<script type="text/javascript">
	function hot(){
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET","hotPetition.php",true);
	xhttp.send(null);
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("hot").innerHTML=xhttp.responseText;
		}
	};
}
setInterval(function(){hot();},200);

</script>
</html>