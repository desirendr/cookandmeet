<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if (isset($_POST["modifmdp"])){

	require_once('model/site/oublie_mdp2.php');
	$modif = modif_mdp($_POST);
	

	if($modif){
		header("Location:?module=site&action=index&notif=vok");
	} else {
		header("Location:?module=site&action=index&notif=nok");
	};



} else {
	include ("view/site/oublie_mdp2.php");
};

