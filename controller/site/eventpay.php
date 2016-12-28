<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

if(!isset($_SESSION['user'])){

	header('Location:?module=site&action=index&notif=must_connect');
	exit;
}

else{

	require_once('model/site/attend.php');
	$attend = inscrire_user($_GET['event_id'], $_GET['user_id']);

	include_once('view/site/eventpay.php');

}
