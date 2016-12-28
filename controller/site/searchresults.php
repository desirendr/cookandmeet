<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if (isset($_POST['cities'])){

		//appel du modèle pour les évents liés aux villes			
		require_once('model/site/events.php');
		$events = lire_events($_POST['cities']);
		// var_dump($events);
		// die;

		//include des types de food
		require_once('model/site/dishtypes.php');
		$dishtypes = lire_dishtypes();

		//include des types d'événements
		require_once('model/site/eventtypes.php');
		$eventtypes = lire_eventtypes();

		//include des villes CAM
		require_once('model/site/cities.php');
		$cities = lire_cities();

		require_once('model/site/iframes.php');
		$iframe = lire_iframe($_POST['cities']);

		include_once('view/site/searchresults.php');

	}

	elseif (isset($_GET['city_id'])){

		//appel du modèle pour les évents liés aux villes			
		require_once('model/site/searchbycities.php');
		$events = search_city($_GET['city_id']);

		//include des types de food
		require_once('model/site/dishtypes.php');
		$dishtypes = lire_dishtypes();

		//include des types d'événements
		require_once('model/site/eventtypes.php');
		$eventtypes = lire_eventtypes();

		//include des villes CAM
		require_once('model/site/cities.php');
		$cities = lire_cities();

		require_once('model/site/iframes.php');
		$iframe = lire_iframe($_GET['city_id']);

		include_once('view/site/searchresults.php');


	}
		
	else{

		header("Location:?module=site&action=index&notif=nosearch");

	}
