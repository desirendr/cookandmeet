<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_locations($user)
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT * from CAM_locations
											WHERE CAM_users_ID=:user');

			$query->bindParam(':user', $user, PDO::PARAM_STR);
			
			$query->execute(); 
			
			$locations = $query->fetchAll();

			$query->closeCursor();
			return $locations;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}