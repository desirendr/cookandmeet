<?php

	define("_BASE_URL", "");

	//Pour repérer les erreurs et les affichers, pas terrible en prod
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	// Config des paramètres
	include_once('config/config.inc.php');

	// Chargement du core
	include_once('core/core.php');

	// Démarrer la session
	if (!secu_session_start(SESSION_NAME)) {
		die("Problème session !");
	}

	// Connexion à la BD
	include_once('model/connexion.inc.php');

	// Appel du controleur du module demandé
	if (!isset($_GET['module'])) {
		$module=DEFAULT_MODULE;
	} else{
		$module = $_GET['module'];
	}

	if (!isset($_GET['action'])) {
		$action=DEFAULT_ACTION;
	} else {
		$action = $_GET['action'];
	}
	
	$_SESSION["module"] = $module;
	$_SESSION["action"] = $action;

	$url='controller/'.$module.'/'.$action.'.php';

	if (file_exists($url)) {
		include_once($url);
	} else{
		//Pas de module trouvé, erreur 404
		include_once('view/404.php');
	}

