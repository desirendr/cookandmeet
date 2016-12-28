<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_iframe($iframe)
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT CAM_cities.city_url
											FROM CAM_cities
											WHERE CAM_cities.ID = :iframe');

			$query->bindParam(':iframe', $iframe, PDO::PARAM_STR);
			
			$query->execute(); 
			
			$iframe = $query->fetch();

			$query->closeCursor();
			return $iframe;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}