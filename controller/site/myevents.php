<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !");

require_once('model/site/eventsperso.php');
$events = lire_events($_SESSION['user']['ID']);

include_once('view/site/myevents.php');
