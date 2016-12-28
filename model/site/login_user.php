<?php
	if(!defined("_BASE_URL")) die("Pirate reconnu !");
	
	function login_user($form)
	{
		global $connection; 
		
		try{
			$query = $connection->prepare("SELECT * from CAM_users
					WHERE user_email=:user_login
						AND user_password=:user_pass
						AND user_cle=1");

			//On initialise les paramètres
			$query->bindParam(':user_login', $form["user_login"], PDO::PARAM_STR);
			$query->bindParam(':user_pass', $form["user_pass"], PDO::PARAM_STR);
			
			//On exécute la requête				
			$query->execute();

			//On recupère le résultat
			$user = $query->fetch();

			//On ferme le curseur
			$query->closeCursor();

			//On retourne le user
			return $user;
			
		}
		
		catch(Exception $e){
		
			$query->closeCursor();
			return false;
			
		}

	}