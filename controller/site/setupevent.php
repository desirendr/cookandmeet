<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if(!isset($_POST['location'])){

		require_once('model/site/locations.php');
		$locations = lire_locations($_SESSION['user']['ID']);

		require_once('model/site/dishtypes.php');
		$dishtypes = lire_dishtypes();

		require_once('model/site/eventtypes.php');
		$eventtypes = lire_eventtypes();
	
		include_once('view/site/setupevent.php');		
	}

	else{
			require_once('model/site/add_event.php');
			$event = ajouter_event($_POST, $_SESSION['user']['ID'], $_SESSION['user']['CAM_orientations_ID']);

			if($event){

				header('Location:?module=site&action=index&notif=ok');

			} else{

				header('Location:?module=site&action=index&notif=nok');

			}

	}