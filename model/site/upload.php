<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	function ajouter_photo()
	{
		global $connection; 
				
		
			try{
				
				$ext = array('jpg' , 'jpeg', 'gif', 'png' );
				$ext_upload = strtolower( substr( strrchr($_FILES['ch_file']['name'], '.') ,1) );
				
				if ( !in_array($ext_upload,$ext))
				{
					echo "Cette extension n'est pas autorisée ! <br/>";
				}
				else
				{


					$sizes = getimagesize($_FILES["ch_file"]["tmp_name"]);
					$url = "assets/img/user/" . md5(uniqid(mt_rand())) . "." . $ext_upload;

					if(move_uploaded_file($_FILES["ch_file"]["tmp_name"], $url)){
		
				if($ext_upload == "jpg")
					{
						$image = ImageCreateFromJPEG($url);
						$width = imagesx($image);
						$height = imagesy($image);
						if ($width>$height)
						{
							$new_width = 120;
							$new_height = ($new_width * $height) / $width ;
						}

						else
						{
							$new_height = 120;
							$new_width = ($new_height * $width) / $height;
						}

						$thumb = imagecreatetruecolor($new_width,$new_height);
						imagecopyresized($thumb,$image,0,0,0,0,$new_width,$new_height,$width,$height);
						ImageJPEG($thumb, $url);
						chmod($url, 0777);
						imagedestroy($image);
					}

					else if($ext_upload == "gif")
					{
						$image = ImageCreateFromGIF($url);
						$width = imagesx($image);
						$height = imagesy($image);
						if ($width>$height)
						{
							$new_width = 120;
							$new_height = ($new_width * $height) / $width ;
						}

						else
						{
							$new_height = 120;
							$new_width = ($new_height * $width) / $height;
						}

						$thumb = imagecreatetruecolor($new_width,$new_height);
						imagecopyresized($thumb,$image,0,0,0,0,$new_width,$new_height,$width,$height);
						ImageGIF($thumb, $url);
							chmod($url, 0777);

						imagedestroy($image);
					}
					else if($ext_upload == "png")
					{
						$image = ImageCreateFromPNG($url);
						$width = imagesx($image);
						$height = imagesy($image);
						if ($width>$height)
						{
							$new_width = 120;
							$new_height = ($new_width * $height) / $width ;
						}

						else
						{
							$new_height = 120;
							$new_width = ($new_height * $width) / $height;
						}

						$thumb = imagecreatetruecolor($new_width,$new_height);
						imagecopyresized($thumb,$image,0,0,0,0,$new_width,$new_height,$width,$height);
						ImagePNG($thumb, $url);
							chmod($url, 0777);

						imagedestroy($image);

					}
					return $url;
				}
			}
		}

				catch (Exception $e){
					return false;
				}
			
		}