<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_cities()
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT * from CAM_cities');
			
			$query->execute(); 
			
			$cities = $query->fetchAll();

			$query->closeCursor();
			return $cities;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}