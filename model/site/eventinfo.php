<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_event($event)
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
                                            INNER JOIN CAM_dishtypes
                                            ON CAM_dishtypes.ID = CAM_events.CAM_dishtypes_ID
                                            INNER JOIN CAM_orientations
                                            ON CAM_orientations.ID = CAM_events.CAM_orientations_ID
                                            INNER JOIN CAM_eventtypes
                                            ON CAM_eventtypes.ID = CAM_events.CAM_eventtypes_ID
											WHERE CAM_events.ID = :event');

			$query->bindParam(':event', $event, PDO::PARAM_STR);

			
			$query->execute(); 
			
			$event = $query->fetch();

			$query->closeCursor();
			return $event;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return $e;
			
		}

	}