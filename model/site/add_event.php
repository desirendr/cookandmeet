<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	function ajouter_event($event, $user, $orientation)
	{
		global $connection; 
				
		
			try{
			
				$query = "insert into CAM_events
							(CAM_locations_ID, CAM_users_ID, CAM_dishtypes_ID, CAM_eventtypes_ID, CAM_orientations_ID, event_name, event_date, event_time, event_price, event_guest)
						values
							(:location, :user, :dishtype, :eventtype, :orientation, :name, :date, :time, :price, :guests)";
						
						$q = $connection->prepare($query);
						$q->bindValue(':location', $event["location"], PDO::PARAM_STR);
						$q->bindValue(':user', $user, PDO::PARAM_STR);
						$q->bindValue(':dishtype', $event["dishtype"], PDO::PARAM_STR);
						$q->bindValue(':eventtype', $event["eventtype"], PDO::PARAM_STR);
						$q->bindValue(':orientation', $orientation, PDO::PARAM_STR);
						$q->bindValue(':name', $event["name"], PDO::PARAM_STR);
						$q->bindValue(':date', $event["date"], PDO::PARAM_STR);
						$q->bindValue(':time', $event["time"], PDO::PARAM_STR);
						$q->bindValue(':price', $event["price"], PDO::PARAM_STR);
						$q->bindValue(':guests', $event["guests"], PDO::PARAM_STR);
						$q->execute();
					return true;
				}
				catch (Exception $e){
					return false;
				}
			
		}