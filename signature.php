<?php
require("AjouterSignature.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>signer une pétition</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div class="container mt-5">
		<div id="five">
		</div>
	<form action="AjouterSignature.php" method="post">
		<!-- <input type="number" class="form-control mb-3" name="IDP" placeholder="IDP"> -->
		<select name="IDP" class="form-control mb-3">
			<?php foreach ($ids as $id) {
				echo "<option>".$id['IDP']."</option>";
			}
			?>
		</select>
		<input type="text"  class="form-control mb-3" name="Nom" placeholder="Nom">
		<input type="text"  class="form-control mb-3" name="Prenom" placeholder="Prenom">
		<input type="text"  class="form-control mb-3" name="Email" placeholder="Email">
		<input type="text"  class="form-control mb-3" name="Pays" placeholder="Pays">
		<input type="submit"  class="form-control btn-primary" name="signer">
	</form>
</div>
</body>
<script type="text/javascript">
		function five(){
	var xhttp = new XMLHttpRequest();
	xhttp.open("GET","LastFivePetitions.php",true);
	xhttp.send(null);
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("five").innerHTML=xhttp.responseText;
		}
	};
}
setInterval(function(){five();},200);
</script>
</html>