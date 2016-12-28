<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	function ajouter_place($place, $url, $user)
	{
		global $connection; 
				
		
			try{
			
				$query = "insert into CAM_locations
							(CAM_cities_ID, CAM_users_ID, location_streetnumber, location_streetname, location_district, location_phonenumber, location_digicode, location_interphone, location_building, location_floor, location_door, location_detail, location_name, location_photo)
						values
							(:cities, :user, :streetnumber, :streetname, :district, :phonenumber, :digicode, :interphone, :building, :floor, :door, :detail, :name, :photo)";
						
						$q = $connection->prepare($query);
						$q->bindValue(':cities', $place["cities"], PDO::PARAM_STR);
						$q->bindValue(':user', $user, PDO::PARAM_STR);
						$q->bindValue(':streetnumber', $place["streetnumber"], PDO::PARAM_STR);
						$q->bindValue(':streetname', $place["streetname"], PDO::PARAM_STR);						
						$q->bindValue(':district', $place["district"], PDO::PARAM_STR);
						$q->bindValue(':phonenumber', $place["phonenumber"], PDO::PARAM_STR);
						$q->bindValue(':digicode', $place["digicode"], PDO::PARAM_STR);
						$q->bindValue(':interphone', $place["interphone"], PDO::PARAM_STR);
						$q->bindValue(':building', $place["building"], PDO::PARAM_STR);
						$q->bindValue(':floor', $place["floor"], PDO::PARAM_STR);
						$q->bindValue(':door', $place["door"], PDO::PARAM_STR);
						$q->bindValue(':detail', $place["detail"], PDO::PARAM_STR);
						$q->bindValue(':name', $place["name"], PDO::PARAM_STR);
						$q->bindValue(':photo', $url, PDO::PARAM_STR);
						$q->execute();
					return true;
				}
				catch (Exception $e){
					return false;
				}
			
		}