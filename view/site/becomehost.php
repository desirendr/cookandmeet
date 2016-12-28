<?php
include_once('view/layout/header.inc.php');
?>


		<div class="page-inscription">

		<h2>Remplissez ce formulaire pour vous devenir hôte</h2>

		<div class="formulaire-inscription">
				<form id="add_user" name="add_user" method="post" action="?module=site&action=becomehost" enctype="multipart/form-data">
				<fieldset>
				<legend><span class="number">1</span> Informations</legend>
				<p>Vous êtes:</p>
				<input type="checkbox" name="gender" value="1">Une femme
				<input type="checkbox" name="gender" value="2">Un homme<br/>
				<input type="checkbox" name="orientation" value="1">Hétérosexuel(le)
				<input type="checkbox" name="orientation" value="2">Homosexuel(le)
				<input type="checkbox" name="orientation" value="3">Bisexuel(le)
				<input type="text" name="firstname" placeholder="Prenom*" required>
				<input type="text" name="lastname" placeholder="Nom*" required>
				<input type="number" name="age" placeholder="Age *" required>
				<input type="email" name="user_login" placeholder="Email *" required>
				<input type="password" name="user_pass" placeholder="Password *" required>
				<label for="ch_file">Votre photo</label><input name="ch_file" type="file"/><br/>
				</fieldset>
				<fieldset>
				<legend><span class="number" required>2</span> Description</legend>
				<textarea rows="4" name="description" placeholder="Pas besoin d'écrire un roman, plus c'est court mieux c'est, paraît-il."></textarea>
				</fieldset>
				<input type="submit" value="Continuer" /><input type="reset" value="Effacer" />
				</form>
		</div>
		</div>

<?php
	include("view/layout/footer.inc.php");
?>
