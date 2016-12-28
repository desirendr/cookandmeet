<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_eventtypes()
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT * from CAM_eventtypes');
			
			$query->execute(); 
			
			$eventtypes = $query->fetchAll();

			$query->closeCursor();
			return $eventtypes;

		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}