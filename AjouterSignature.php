<?php
require('Model.php');
$m = new Model();
if(isset($_POST['signer'])){
$m->signer($_POST['IDP'],$_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Pays']);
header('location:ListePetition.php');
}
$ids = $m->ids();

?>