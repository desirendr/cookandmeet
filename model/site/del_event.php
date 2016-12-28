<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
 
	function del_event()
	{
		global $connection; 
				
		
			try
				{
					global $connection;
						
					$query = "delete from CAM_events
								where ID=:event_id";
						
					$q = $connection->prepare($query);
					$q->bindValue(':event_id', $_GET["del_event"], PDO::PARAM_INT);
					$q->execute();
					return true;
				}
				catch (Exception $e){
					return false;
				}
			
		}