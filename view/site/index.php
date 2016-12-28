<?php
include_once('view/layout/header.inc.php');
?>

		<div id="part-1">
			<h1>RESERVEZ UN REPAS CHEZ UN CELIBATAIRE</h1>
			<h4 id="titre-mobile">Partagez plus qu'un repas, partagez une rencontre</h4>


	     	<form id="searchbox" name="search" method="post" action="?module=site&action=searchresults"><!--début de recherche-->
				<select id="search" name="cities">
					<?php foreach($cities as $city) { ?>
					<option value="<?php echo $city['ID']; ?>"><?php echo $city["city_name"]; ?></option>
					<?php }; ?>
				</select>
				<input id="submit" type="submit" name="rechercher" value="Voir les événements"/>
			</form><!--fin de recherche-->

	        <div class="scroll-down-container text-center">
			<a class="scroll-down" href="#">
				<img src="assets/img/arrow-scroll-down.png" class="fleche" alt="scroll down"/>
			</a>
		</div>

		</div>

		<div class="part-2">

			<h2>DECOUVREZ NOTRE CONCEPT</h2>

			<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">

				<div class="mes-icones">

					<div class="bloc-1">
						<a href="#set-1" class="hi-icon hi-icon-locked">Security</a>
						<h3>RESERVEZ</h3>
						<p class="info">D'un simple clique retrouvez-vous autour d'une table entre célibataire de votre âge</p>
					</div>

					<div class="bloc-2">
						<a href="#set-1" class="hi-icon hi-icon-link">Mobile</a>
						<h3>PARTAGEZ</h3>
						<p class="info">Profitez d'une bonne ambiance et d'un diner spécialement conccocté pour vous  </p>
					</div>

					<div class="bloc-3">
						<a href="#set-1" class="hi-icon hi-icon-user">Desktop</a>
						<h3>RENCONTRER</h3>
						<p class="info">Faites de nouvelles rencontres lors de nos evenements et trouvez la personnes idéale</p>
					</div>
				</div>
			</div>

			
		</div>
		<div class="part-3">
		<h2 id="video-mobile">DECOUVREZ NOTRE PREMIER DINER</h2>
		<div class="bouton-play">
		<a href="https://www.youtube.com/watch?v=JfWbpUkFvvs" target="parent"><i class="fa fa-play-circle fa-5x"></i></a>
		</div>
		</div>

		<div class="part-4">

			<div class="info-map">
            	<h2 id="title-map">CHOISISSEZ VOTRE VILLE</h2>
            	
            </div>

            	<div class="map">

		            	<div>
						<a href="?module=site&action=searchresults&city_id=10"><img id="lille" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>

		            	<div>
						<a href="?module=site&action=searchresults&city_id=1"><img id="paris" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>

		            	<div>
						<a href="?module=site&action=searchresults&city_id=7"><img id="strasbourg" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>

						<div>
						<a href="?module=site&action=searchresults&city_id=11"><img id="rennes" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>

						<div>
						<a href="?module=site&action=searchresults&city_id=6"><img id="nantes" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>

						<div>
						<a href="?module=site&action=searchresults&city_id=3"><img id="lyon" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>

						<div>
						<a href="?module=site&action=searchresults&city_id=9"><img id="bordeaux" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>


						<div>
						<a href="?module=site&action=searchresults&city_id=5"><img id="nice" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>

						<div>
						<a href="?module=site&action=searchresults&city_id=8"><img id="montpellier" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>

						<div>
						<a href="?module=site&action=searchresults&city_id=4"><img id="toulon" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>

						<div>
						<a href="?module=site&action=searchresults&city_id=2"><img id="marseille" class="map-ville" src="assets/img/ico-loca.png" ></a>
						</div>


            	<div id="bouton-map">
                
                <a class="bouton-map" href="?module=site&action=cities" >DECOUVREZ TOUTES NOS VILLES</a>

            </div>
     			
     			</div>

     			

     			<div class="map-mobile">
     			<div class="map1">

     			<div id="ville-mobile">
				<a id="lien-ville" href="?module=site&action=searchresults&city_id=9"><img id="ico-ville"  src="assets/img/ico-loca-mobile.png" >Bordeaux</a>
				</div>

            	<div  id="ville-mobile">
				<a id="lien-ville" href="?module=site&action=searchresults&city_id=10"><img  id="ico-ville"  src="assets/img/ico-loca-mobile.png" >Lille</a>
				</div>

				<div  id="ville-mobile">
				<a id="lien-ville" href="?module=site&action=searchresults&city_id=3"><img  id="ico-ville" src="assets/img/ico-loca-mobile.png" >Lyon</a>
				</div>

				</div>	
				<div class="map2">

					<div  id="ville-mobile">
				<a id="lien-ville" href="?module=site&action=searchresults&city_id=2"><img   id="ico-ville" src="assets/img/ico-loca-mobile.png" >Marseille</a>
				</div>

				<div  id="ville-mobile">
				<a id="lien-ville" href="?module=site&action=searchresults&city_id=8"><img  id="ico-ville" src="assets/img/ico-loca-mobile.png" >Montpellier</a>
				</div>

				<div  id="ville-mobile">
				<a id="lien-ville" href="?module=site&action=searchresults&city_id=5"><img id="ico-ville"  src="assets/img/ico-loca-mobile.png" >Nice</a>
				</div>

				

				

				</div>
				<div class="map3">	

				<div  id="ville-mobile">
				<a id="lien-ville" href="?module=site&action=searchresults&city_id=1"><img id="ico-ville"  src="assets/img/ico-loca-mobile.png" >Paris</a>
				</div>

				<div  id="ville-mobile">
				<a id="lien-ville" href="?module=site&action=searchresults&city_id=11"><img id="ico-ville"  src="assets/img/ico-loca-mobile.png" >Rennes</a>
				</div>

				<div  id="ville-mobile">
				<a id="lien-ville" href="?module=site&action=searchresults&city_id=4"><img id="ico-ville"  src="assets/img/ico-loca-mobile.png" >Toulon</a>
				</div>





			
     			
     			</div>
			
		</div>

</div>

<?php
	include("view/layout/footer.inc.php");
?>