<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

if (isset($_GET['user_id'])){

	require_once('model/site/profile.php');
	$profile = lire_profile($_GET['user_id']);

	include_once('view/site/profile.php');

}
