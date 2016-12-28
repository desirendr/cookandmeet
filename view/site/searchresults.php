<?php
	include_once('view/layout/header.inc.php');
?>
		<div id="map-paris">
		<iframe src="<?php echo $iframe["city_url"]; ?>" width="100%" height="1000" frameborder="0" style="border:0, float:left" allowfullscreen></iframe>
		</div>


			<div>
			<div class="page-recherche">
			<!--<div class="formulaire-recherche">
				<form>
				<fieldset>
					<select id="ville" name="cities">
						<optgroup label="Ville de l'évent">
						<?php //foreach($cities as $city) { ?>
						<option value="<?php //echo $city['ID']; ?>"><?php //echo $city["city_name"]; ?></option>
						<?php // }; ?>
						</optgroup>
					</select> 
				<input type="date" name="field1" placeholder="Date">

				<div name="field1" id="slider-range"></div>

				<select id="ville" name="eventtype">
					<optgroup label="Type d'évent">
					<?php //foreach($eventtypes as $eventtype) { ?>
					<option value="<?php //echo $eventtype['ID']; ?>"><?php //echo //$eventtype["eventtype_name"]; ?></option>
					<?php // }; ?>
					</optgroup>				
				</select>

				<select id="ville" name="dishtype">
					<optgroup label="Type de cuisiine">
					<?php //foreach($dishtypes as $dishtype) { ?>
					<option value="<?php //echo $dishtype['ID']; ?>"><?php //echo $dishtype["dishtype_name"]; ?></option>
					<?php // }; ?>
					</optgroup>
				</select>  

				</fieldset>
				<input type="submit" value="Valider" />
				</form>
		</div>-->
		</div>
			<div class="total-bloc">
				<?php foreach($events as $event) { ?>
				<div  class="bloc-ville">

					<div class="img-ville">

						<a href="<? if (isset($_SESSION['user'])){ ?>

						?module=site&action=eventinfo&event_id=<?php echo $event["event_id"]; ?>

						<?php } else { ?>

						?module=site&action=index&notif=mustconnect

						<?php } ?>

						"><img class="hote1" src="<?php echo $event["location_photo"]; ?>" alt=""></a>
					</div>
					<div class="info-hote">
						<div class="img-hote">
						<a href="?module=site&action=profile&user_id=<?php echo $event["CAM_users_ID"]; ?>"><img class="img-chef" src="<?php echo $event["user_photo"]; ?>" alt=""></a>
						</div>
						<div class="info-complet">
							<a href="

							<? if (isset($_SESSION['user'])){ ?>

							?module=site&action=eventinfo&event_id=<?php echo $event["event_id"]; ?>

							<?php } else { ?>

							?module=site&action=index&notif=mustconnect

							<?php } ?>

							"><p class="info-diner"><?php echo $event["event_name"]; ?></p></a>
							<a href="?module=site&action=profile&user_id=<?php echo $event["CAM_users_ID"]; ?>"><h3 class="info-nom" ><?php echo $event["user_firstname"]; ?> <?php echo $event["user_lastname"]; ?></h3></a></br>
							<p><?php echo $event["city_name"]; ?>, <?php echo $event["location_district"]; ?></p>
						</div>
						<p class="prix-hote" ><?php echo $event["event_price"]; ?>€</p>
					</div>
				</div>
			<?php } ?>
			</div>
			</div>

<?php
	include_once('view/layout/footer.inc.php');
?>