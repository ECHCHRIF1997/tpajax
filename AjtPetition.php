<?php
require("Model.php");
if(isset($_POST['ajouter'])){
	$m = new Model();
	$m->ajouterPetition($_POST['Titre'],$_POST['Description']);
	header('location:ListePetition.php');
}
?>