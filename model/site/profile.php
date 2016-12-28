<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_profile($profile)
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT *
											FROM CAM_users
											WHERE ID=:profile');

			$query->bindParam(':profile', $profile, PDO::PARAM_INT);

			
			$query->execute(); 
			
			$profile = $query->fetch();

			$query->closeCursor();
			return $profile;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}