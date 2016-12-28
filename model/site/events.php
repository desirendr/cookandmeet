<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_events($results)
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT *, CAM_events.ID as event_id, CAM_cities.ID as city_id
											FROM CAM_events
											INNER JOIN CAM_locations
											ON CAM_locations.ID = CAM_events.CAM_locations_ID
                                            INNER JOIN CAM_users
                                            ON CAM_users.ID = CAM_events.CAM_users_ID
                                            INNER JOIN CAM_cities
                                            ON CAM_cities.ID = CAM_locations.CAM_cities_ID
											WHERE CAM_locations.CAM_cities_ID = :results');

			$query->bindParam(':results', $results, PDO::PARAM_STR);

			
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