<?php
	require('Model.php');
	$m = new Model();
	$hot = $m->hotPetition();
	$hott = $hot->fetch();
	echo $hott[0];
?>