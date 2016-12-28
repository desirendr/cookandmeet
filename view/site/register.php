<?php
include_once('view/layout/header.inc.php');
?>


		<div class="page-inscription">

		<h2>Remplissez ce formulaire pour vous inscrire</h2>

		<div class="formulaire-inscription">
				<form id="add_user" name="add_user" method="post" action="?module=site&action=register" enctype="multipart/form-data" 
				onsubmit="return verifForm(this)">
				<fieldset>
				<legend><span class="number">1</span> Informations</legend>
				<p>Vous êtes:</p>
				<input type="radio" name="gender" value="1" checked>Une femme
				<input type="radio" name="gender" value="2" >Un homme<br/>
				<input type="radio" name="orientation" value="1" checked>Hétérosexuel(le)
				<input type="radio" name="orientation" value="2" >Homosexuel(le)
				<input type="radio" name="orientation" value="3" >Bisexuel(le)
				<input type="text" name="firstname" placeholder="Prenom*" required onblur="verifFirstname(this)">
				<input type="text" name="lastname" placeholder="Nom*" required onblur="verifLastname(this)">
				<input type="number" name="age" placeholder="Age *" required onblur="verifAge(this)">
				<input type="email" name="user_login" placeholder="Email *" required onblur="verifMail(this)"> 
				<input id="user_pass" type="password" name="user_pass" placeholder="Mot de passe" class="user_pass" onblur="verif();" required>
                <input id="user_pass2" type="password" name="user_pass2" placeholder="Vérifiez votre mot de passe" class="user_pass2" onblur="verif();" required>
				<label for="ch_file">Votre photo</label><input name="ch_file" type="file"/><br/>
				</fieldset>
				<fieldset>
				<legend><span class="number" required>2</span> Description</legend>
				<textarea rows="4" name="description" placeholder="Pas besoin d'écrire un roman, plus c'est court mieux c'est, paraît-il."></textarea>
				</fieldset>
				<input type="button" onclick="sendForm();" value="Valider" /><input type="reset" value="Effacer" />
				</form>
		</div>
		</div>


<?php

    include("assets/js/controle_saisie.js");

	include("view/layout/footer.inc.php");
?>
