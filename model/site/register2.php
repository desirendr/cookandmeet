<?php

	if(!defined("_BASE_URL")) die("Pirate reconnu !");
	
	function confirm_account($lastconfirm)
	{
		global $connection; 
		
		try{
			$query = $connection->prepare("UPDATE CAM_users
					SET user_cle = 1	
					WHERE ID = :sameID");

			$query->bindParam(':sameID', $lastconfirm['id'], PDO::PARAM_INT);
			
			//On exécute la requête				
			$query->execute();

			//On ferme le curseur
			$query->closeCursor();

			//On retourne le user
			return true;
			
		}
		catch(Exception $e){
		
			$query->closeCursor();
			return false;
			
		}

	}