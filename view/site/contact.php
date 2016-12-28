<?php
	include_once('view/layout/header.inc.php');
?>

<div id="part1-contact">
		<div class="formu-contact">
		<div class="page-contact">

		<div class="formulaire-contact">
				<form>
				<fieldset>
				<legend id="title-contact">CONTACTEZ NOUS</legend>
				<input type="text" name="field1" placeholder="Prenom *" required>
				<input type="email" name="field2" placeholder="Email *" required>
				</fieldset>
				<fieldset>
				<input type="text" name="field1" placeholder="Sujet" required> 
				<textarea name="field3" placeholder="Description"></textarea>
				</fieldset>
				<input type="submit" value="Valider" />
				</form>
		</div>
			</div>

		<div id="map-contact">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.4231858978196!2d2.341402335685898!3d48.86920869416327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3c7e25a349%3A0x5012b3632a6880b7!2sPalais+Brongniart!5e0!3m2!1sfr!2sfr!4v1453394305002" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		</div>
		</div>

<?php
	include_once('view/layout/footer.inc.php');
?>