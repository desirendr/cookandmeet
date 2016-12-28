<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	
	if(!isset($_POST['user_login'])){
	
	include_once('view/site/register.php');
		
	}
	else{
		require_once('model/site/upload_test.php');
		$url = ajouter_photo($_FILES);

		$key = md5(uniqid(mt_rand()));
		require_once('model/site/add_user.php');
		$user = ajouter_user($_POST, $key, $url); 

		require_once('model/site/confirm2.php');
		$confi = mail_confirmation($_POST);
		// var_dump($id);
		// exit;

		if(isset($user) AND isset($confi)) {

		// var_dump($_POST);exit;

		require_once("core/confirm_mail.php");

		$conf2 = mail_confirm($_POST['user_login'], $confi['ID']);	

		header("location:index.php?notif=mail_confirm_sent");

	} else {

		header("location:?module=site&action=register&notif=mail_wrong");

	}
}
