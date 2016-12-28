<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	
	if(!isset($_POST['user_login'])){
	
	include_once('view/site/becomehost.php');
		
	}
	else{
		
		$form = $_POST;
		$form["user_pass"] = md5($form["user_pass"]);

		require_once('model/site/upload_test.php');
		$url = ajouter_photo($_FILES);

		require_once('model/site/add_user.php');
		$user = ajouter_user($_POST, $url); 
		
		require_once('model/site/login_user.php');
		$user = login_user($form);
		
		if($user){
			$_SESSION["user"] = $user;
			header("location:?module=site&action=add_location&notif=ok");
			
		}
		else{
			header("location:?module=site&action=becomehost&notif=nok");
		}
	}
