<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	function ajouter_user($user, $key, $url)
	{
		global $connection; 
				
		
			try{
			
				$query = "insert into CAM_users
							(CAM_genders_ID, CAM_orientations_ID, user_lastname, user_firstname, user_age, user_email, user_password, user_description, user_photo, user_cle)
						values
							(:gender, :orientation, :lastname, :firstname, :age, :user_login, :user_pass, :description, :photo, :cle)";
						
						$q = $connection->prepare($query);
						$q->bindValue(':gender', $user["gender"], PDO::PARAM_STR);
						$q->bindValue(':orientation', $user["orientation"], PDO::PARAM_STR);
						$q->bindValue(':lastname', $user["lastname"], PDO::PARAM_STR);
						$q->bindValue(':firstname', $user["firstname"], PDO::PARAM_STR);
						$q->bindValue(':age', $user["age"], PDO::PARAM_STR);
						$q->bindValue(':user_login', $user["user_login"], PDO::PARAM_STR);
						$q->bindValue(':user_pass', md5($user["user_pass"]), PDO::PARAM_STR);
						$q->bindValue(':description', $user["description"], PDO::PARAM_STR);
						$q->bindValue(':photo', $url, PDO::PARAM_STR);
						$q->bindValue(':cle', $key, PDO::PARAM_STR);
						$q->execute();
					return true;
				}
				catch (Exception $e){
					return false;
				}
			
		}