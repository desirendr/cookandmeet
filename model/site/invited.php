<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_invited($invited, $user)
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT *
											FROM CAM_attenting
											WHERE CAM_events_ID = :invited
											AND CAM_users_ID = :user');

			$query->bindParam(':invited', $invited, PDO::PARAM_STR);
			$query->bindParam(':user', $user, PDO::PARAM_STR);

			
			$query->execute(); 
			
			$guests = $query->fetch();

			$query->closeCursor();
			return $guests;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return $e;
			
		}

	}