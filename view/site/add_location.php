<?php
	include_once('view/layout/header.inc.php');
?>

		<h1 id="title-mdp">AJOUTER LE LIEU DE L'EVENT</h1>

		<div class="formulaire-hote">
				<form id="add_place" name="add_place" method="post" action="?module=site&action=add_location" enctype="multipart/form-data">
				<fieldset>
					<legend>Informations principales</legend>
					<select  name="cities" required>
						<option>Choisissez votre ville</option>
						<?php foreach($cities as $city) { ?>
						<option name="city" value="<?php echo $city['ID']; ?>"><?php echo $city["city_name"]; ?></option>
						<?php }; ?>
					</select>
					<input type="number" name="streetnumber" placeholder="Numéro de rue" required>
					<input type="text" name="streetname" placeholder="Nom de la voie *" required>
					<input type="number" name="district" placeholder="Arrondissement" required>
					<input type="text" name="name" placeholder="Nom*" required>
					<div id="upload-pht">
					<label for="ch_file">Photo du lieu</label><input name="ch_file" type="file"/><br/>
					</div>
				</fieldset>
				<fieldset>
					<legend>Informations complémentaires</legend>
					<input type="number" name="phonenumber" placeholder="numéro de téléphone" required>
					<input type="text" name="digicode" placeholder="Code d'entrée" required>
					<input type="text" name="interphone" placeholder="Interphone" required>
					<input type="text" name="building" placeholder="Votre Immeuble" required>
					<input type="number" name="floor" placeholder="Votre étage" required>
					<input type="text" name="door" placeholder="Votre porte" required>
					<textarea rows="4" name="detail" placeholder="Des détails en plus"></textarea>
				</fieldset>
				<input type="submit" value="Valider" />
				<input id="search7" type="reset" value="Effacer" />
				</form>
		</div>

<?php
	include("view/layout/footer.inc.php");
?>