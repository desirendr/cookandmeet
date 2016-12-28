<?php
include_once('view/layout/header.inc.php');
?>

    <h1 id="title-mdp">CRÉER UN EVENEMENT</h1>
        <div class="formulaire-hote">
        <form name="add_event" method="post" action="?module=site&action=setupevent">
    		<input type="text" name="name" placeholder="Nom de l'événement" required>

			    <select id="location" name="location">
			        <?php foreach($locations as $location) { ?>
			        <option value="<?php echo $location['ID']; ?>"><?php echo $location["location_name"]; ?></option>
			        <?php }; ?>
			    </select>

		    <select id="eventtype" name="eventtype">
		        <?php foreach($eventtypes as $eventtype) { ?>
		        <option value="<?php echo $eventtype['ID']; ?>"><?php echo $eventtype["eventtype_name"]; ?></option>
		        <?php }; ?>
		    </select>

		    <select id="dishtype" name="dishtype">
		        <?php foreach($dishtypes as $dishtype) { ?>
		        <option value="<?php echo $dishtype['ID']; ?>"><?php echo $dishtype["dishtype_name"]; ?></option>
		        <?php }; ?>
		    </select>
		    <input type="date" name="date">
		    <input type="time" name="time">
		    <input type="number" name="price" placeholder="Prix €" required>
		    <input type="number" name="guests" placeholder="Nombre d'invités souhaité" required>
		    <input  type="submit" value="Valider" /><input id="search7" type="reset" value="Effacer" />
		</form>
	</div>

<a href="?module=site&action=index">retour à l'accueil</a>
