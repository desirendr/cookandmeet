<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

if (isset($_POST["user_login"])){

	//Cryptage du password
	$form = $_POST;
	$form["user_pass"] = md5($form["user_pass"]);

	require_once('model/site/login_user.php');
	$user = login_user($form);
	

	if($user){
		$_SESSION["user"] = $user;
		header('Location:?module=site&action=index&notif=ok');
	} else{
		header('Location:?module=site&action=index&notif=nok');
	}
}