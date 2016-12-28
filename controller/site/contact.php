<?php

if(!defined("_BASE_URL")) die("Pirate reconnu !");
	
	if (isset($_POST["nom"])){

		require_once ("core/contact_mail.php");
		$test = contact_mail($_POST['nom'], $_POST['expediteur'], $_POST['texte'], $_POST['sujet']);
		 // var_dump($test);exit;

			if($test) {
				header("Location:?module=site&action=contact&notif=confirm_mail");
			}
			 else {
				header("Location:?module=site&action=contact&notif=nok");
			}


	} else {
		include ("view/site/contact.php");
	};
