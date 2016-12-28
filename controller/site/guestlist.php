<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

if (isset($_GET['event_id'])){

	require_once('model/site/eventinfo.php');
	$event = lire_event($_GET['event_id']);

	require_once('model/site/invited.php');
	$invited = lire_invited($_GET['event_id'], $_SESSION['user']['ID']);
	// var_dump($invited);
	// die;

	require_once('model/site/guests.php');
	$guests = lire_guests();

	include_once('view/site/guestlist.php');

}

else{
	include_once('view/site/index.php');
}
