<?php
if(!defined("_BASE_URL")) die("Pirate reconnu !"); 

	if (isset($_SESSION["user"])) {

		//Supression de la session
		session_unset();

		//Redirection homepage
		header("Location:?module=site&action=index&logout=ok");

	} else{
		header("Location:?module=site&action=index&logout=nok");
	}