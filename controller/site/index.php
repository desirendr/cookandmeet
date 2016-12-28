<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

require_once('model/site/cities.php');
$cities = lire_cities();


		if(isset($_GET["event_id"]))
		{
		include_once('model/site/unregister.php');
		$retour = unregister(); 
		
			if($retour){
			
				header("location:?module=site&action=index&notif=unregisterok");
				
			}
			else{
				header("location:?module=site&action=index&notif=unregisternok");
			}

		}

		elseif (isset($_GET["del_event"])){

		include_once('model/site/del_event.php');
		$retour = del_event(); 
		
			if($retour){
			
				header("location:?module=site&action=index&notif=deleteok");
				
			}
			else{
				header("location:?module=site&action=index&notif=deletenok");
			}

	}
	else{
		include_once('view/site/index.php');
	}
