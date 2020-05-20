<?php
include_once("Classes/Signature.php");
require("Model.php");
$m = new Model();
$fives = $m->fiveLastSigns();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrip.css">
</head>
<body>
	<table class='table'><tr><th scope="col">Nom</th><th scope="col">Prenom</th><th scope="col">Email</th><th scope="col">Pays</th><th scope="col">Date</th><th scope="col">Heure</th></tr>
		<h2>recent petitions</h2>
	<?php foreach($fives as $five){
		echo "<tr>";
		echo "<td>".$five['Nom']."</td>";
		echo "<td>".$five['Prenom']."</td>";
		echo "<td>".$five['Email']."</td>";
		echo "<td>".$five['Pays']."</td>";
		echo "<td>".$five['Date']."</td>";
		echo "<td>".$five['Heure']."</td>";
		echo "</tr>";
		}
		?>
	</table>
	
</body>
</html>