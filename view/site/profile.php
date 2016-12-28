<?php
include_once('view/layout/header.inc.php');

?>

	<div>
	   <img class="fond-hote" src="assets/img/fond-hote.jpg">
	    	</div>

	    	<div class="info-page-hote">

		    	<div>
		    		<img class="photo-page-hote" src="<?php echo $profile['user_photo'] ?>" alt="photo_utilisateur">
		    		<?php if (isset($_SESSION['user'])){
		    				if ($_SESSION['user']['ID'] == $profile['ID']){ ?>
		    		<a href="changer_photo.html" id="modification4">Modifier photo</a>
		    		<?php } }?>

		    	</div>
		    	<div class="info-hote-page">
		    	<p class="hote-sexe"><?php 	if ($profile['CAM_genders_ID'] == 2){
			    								if ($profile['CAM_orientations_ID'] == 1){
										    		echo "Hétérosexuel";
										    	} 
										    	elseif($profile['CAM_orientations_ID'] == 2){
										    		echo "Homosexuel";
										    	} 
										    	else{
										    		echo "Bisexuel";
										    	}
									    	}
										    else{
										    	if ($profile['CAM_orientations_ID'] == 1){
										    		echo "Hétérosexuelle";
										    	} 
										    	elseif($profile['CAM_orientations_ID'] == 2){
										    		echo "Homosexuelle";
										    	} 
										    	else{
										    		echo "Bisexuelle";
										    	}
										    }
		    		?></p>

		    	<?php if (isset($_SESSION['user'])){
		    			if ($_SESSION['user']['ID'] == $profile['ID']){ ?>
		    	<a href="changer_sexe.html" id="modification">Modifier affinité</a>
		    	<?php } }?>

		    	<p class="verif-hote"><?php if ($profile['user_cle'] == 1){
		    		echo "Compte vérifié";
		    		} ?></p>
		    	 
		    	</div>

		    </div>

		    <div class="prenom-event">

		    <p class="hote-prenom"><?php echo $profile['user_lastname']; ?> <?php echo $profile['user_firstname']; ?> 
		    
		    <?php if (isset($_SESSION['user'])){
				    if ($_SESSION['user']['ID'] == $profile['ID']){ ?>
				    <a href="changer_nom.html" id="modification2">Modifier nom</a></p>
			    <?php } } ?>
		    <p class="page-hote-description"><?php echo $profile['user_description']; ?>
		    <?php if (isset($_SESSION['user'])){
				    if ($_SESSION['user']['ID'] == $profile['ID']){ ?>
				    <a href="changer_description.html" id="modification3">Modifier description</a></p>
		    <?php } } ?>
		
		</div>

<?php
include_once('view/layout/footer.inc.php');
?>