<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_guests()
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT *
											FROM CAM_attenting
											INNER JOIN CAM_users
											ON CAM_users.ID = CAM_attenting.CAM_users_ID
											WHERE CAM_attenting.CAM_events_ID = :event_id');

			$query->bindParam(':event_id', $_GET['event_id'], PDO::PARAM_STR);
			
			$query->execute(); 
			
			$guests = $query->fetchAll();

			$query->closeCursor();
			return $guests;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}