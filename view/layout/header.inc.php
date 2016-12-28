<!doctype html>

<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Cookandmeet</title>

<link rel="icon" type="image/png" href="assets/img/logo2.png" />
<link href='https://fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.css">
<link href="assets/css/drawer.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/css/jquery-ui.css">
<link href="assets/css/moyenstyle.css" rel="stylesheet" type="text/css" media="only screen and (min-width:750px) and (max-width:950px)"/>
<link href="assets/css/petitstyle.css" rel="stylesheet" type="text/css" media="only screen and (min-width:300px) and (max-width:750px)"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>


</head>

<body>
		
		<div class="container">
			<div class="popup" data-popup="popup-1">
   				
   					<div class="popup-inner">

    					<h2 id="connex" >CONNEXION</h2>

        				<div id="formuuu">
							<form action="?module=site&action=login" method="post">

								<input id="ins" type="email" name="user_login" placeholder=" Mail" required><br/>
								<input  id="ins" type="password" name="user_pass" placeholder=" Password" required><br/>
								<input id="formuu"  type="submit" value="SE CONNECTER"><br/> 

							</form>
			
								<div id="no-inscritption">
									<a href="?module=site&action=register" id="inscri"class="non-inscrit">Pas encore inscrit ?</a>
									<a href="?module=site&action=oublie_mdp" id="oublie" class="non-inscrit" > Mot de passe oublié ?</a>
								</div>

 						</div>

       						<a class="popup-close" data-popup-close="popup-1" href="#">x</a>
   				 	</div>

				</div>

				<nav class="menumobile"> <!--debut menu mobile-->

    			<ul class="active">

    				<li><a href="?module=site&action=index" id="boutoninscription-mobile">Accueil</a></li>
        			<li><a class="btn" data-popup-open="popup-1" href="#" id="boutonconnexion-mobile">Connexion</a></li>
        			<li><a href="?module=site&action=register" id="boutoninscription-mobile">Inscrivez-vous</a></li>
        			<li><a href="?module=site&action=bechef" id="boutondevenirhote-mobile">Devenir Chef</a></li>

    			</ul>

    			<a class="toggle-nav" href="#">&#9776;</a>

			</nav> <!--fin menu mobile-->

			<div class="nav">

				<a href="?module=site&action=index"><img id="logo" src="assets/img/logo.png" alt="logo"></a>

				<ul id="menu">
				<?php
						if(!isset($_SESSION['user'])) {
				?> 	

				<li><a class="btn" data-popup-open="popup-1" href="#" id="boutonconnexion">Connexion</a></li>
				<li><a href="?module=site&action=register" id="boutoninscription">Inscrivez-vous</a></li>
				<li><a href="?module=site&action=becomehost" id="boutondevenirhote">Devenez hôte</a></li>

				<?php
					}else{
				?>

				<li><a href="?module=site&action=dashboard" id="boutoninscription">Mon profil</a></li>
				<li><a href="?module=site&action=add_location" id="boutoninscription">Ajouter un lieu</a></li>
				<li><a href="?module=site&action=myevents" id="boutoninscription">Mes évents</a></li>
				<li><a href="?module=site&action=reservation" id="boutoninscription">Mes reservations</a></li>
				<li><a href="?module=site&action=logout" id="boutoninscription">Déconnexion</a></li>
				<li><a href="?module=site&action=setupevent" id="boutondevenirhote">Créer un évent</a></li>
				
				<?php
				}
				?>
				
	    	</ul>
		
		</div>