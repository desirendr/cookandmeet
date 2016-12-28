<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
	
	if (isset($_POST["destinataire"])){

		require_once('model/site/oublie_mdp.php');
		$user = oublie_mdp($_POST);


		if ($user) {
		require_once ("core/fct_mail.php"); 
		$eemail = mail_offi($_POST['destinataire'], $user['ID']);
		

			if($eemail){
				header("Location:?module=site&action=index&notif=pok");
			} else {
				header("Location:?module=site&action=index&notif=nok");
			}

		} else { 
				header("Location:?module=site&action=oublie_mdp&notif=bok");
		}



	} else {
		include ("view/site/oublie_mdp.php");
	};

