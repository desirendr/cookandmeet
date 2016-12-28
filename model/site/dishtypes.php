<?php 
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	function lire_dishtypes()
	{
		global $connection; 
		
		try{
		
			$query = $connection->prepare('SELECT * from CAM_dishtypes');
			
			$query->execute(); 
			
			$dishtypes = $query->fetchAll();

			$query->closeCursor();
			return $dishtypes;
			
		}
		
		catch( Exception $e ){
		
			$query->closeCursor();
			return false;
			
		}

	}