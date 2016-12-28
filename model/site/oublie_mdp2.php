<?php

	if(!defined("_BASE_URL")) die("Pirate reconnu !");
	
	function modif_mdp($form)
	{
		global $connection; 
		
		try{
			$query = $connection->prepare("UPDATE CAM_users
					SET user_password = :new_password
					WHERE ID = :sameID");


			$query->bindParam(':new_password', md5($form["modifmdp"]), PDO::PARAM_STR);
			$query->bindParam(':sameID', $form['id'], PDO::PARAM_INT);
			
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