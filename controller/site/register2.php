<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

	if (isset($_GET["id"])){

	require_once('model/site/register2.php');
	$confirmassion = confirm_account($_GET);
	

	if($confirmassion){
		header("Location:?module=site&action=index&notif=ok");
	} else {
		header("Location:?module=site&action=index&notif=nok");
	};



} else {
	include ("view/site/index.php");
};

