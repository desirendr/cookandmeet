<?php

	if(!defined("_BASE_URL")) die("Pirate reconnu !");
	
	function oublie_mdp($form)
	{
		global $connection; 
		
		try{
			$query = $connection->prepare("SELECT * from CAM_users
					WHERE user_email=:user_mail");

			//On initialise les paramètres
			$query->bindParam(':user_mail', $form["destinataire"], PDO::PARAM_STR);
			
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