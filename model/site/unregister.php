<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");
 
	function unregister()
	{
		global $connection; 
				
		
			try
				{
					global $connection;
						
					$query = "delete from CAM_attenting
								where CAM_events_ID=:event_id
								AND CAM_users_ID=:user_id";
						
					$q = $connection->prepare($query);
					$q->bindValue(':event_id', $_GET["event_id"], PDO::PARAM_INT);
					$q->bindValue(':user_id', $_GET["user_id"], PDO::PARAM_INT);
					$q->execute();
					return true;
				}
				catch (Exception $e){
					return false;
				}
			
		}