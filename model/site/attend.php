<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	function inscrire_user($yas, $user)
	{
		global $connection; 
				
		
			try{
			
				$query = "insert into CAM_attenting
							(CAM_events_ID, CAM_users_ID)
						values
							(:yas, :user)";
						
						$q = $connection->prepare($query);
						$q->bindValue(':yas', $yas, PDO::PARAM_STR);
						$q->bindValue(':user', $user, PDO::PARAM_STR);
						$q->execute();
					return true;
				}
				catch (Exception $e){
					return false;
				}
			
		}