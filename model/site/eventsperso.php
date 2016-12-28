<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_events($user_id)
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT location_photo, event_name, city_name, event_price, CAM_events.ID as event_id, location_district
												FROM CAM_events
											    INNER JOIN CAM_locations
												ON CAM_locations.ID = CAM_events.CAM_locations_ID
											    INNER JOIN CAM_cities
											    ON CAM_cities.ID = CAM_locations.CAM_cities_ID
												WHERE CAM_events.CAM_users_ID = :user_id');

			$query->bindParam(':user_id', $user_id, PDO::PARAM_STR);

			
			$query->execute(); 
			
			$events = $query->fetchAll();

			$query->closeCursor();
			return $events;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return $e;
			
		}

	}