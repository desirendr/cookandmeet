<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

require_once('model/site/cities.php');
$cities = lire_cities();

	
	if(!isset($_POST['streetnumber'])){
	
	include_once('view/site/add_location.php');
		
	}
	else{

		require_once('model/site/photo_location.php');
		$url = ajouter_photo($_FILES);

		require_once('model/site/add_location.php');
		$place = ajouter_place($_POST, $url, $_SESSION['user']['ID']); 

		if($place){
		
			header("location:?module=site&action=setupevent&notif=mok");
			
		}
		else{
			header("location:?module=site&action=add_location&notif=nok");
		}
	 }
