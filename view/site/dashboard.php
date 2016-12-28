<?php
  include_once('view/layout/header.inc.php');
?>

		<p class="title-bord">Tableau de bord</p>

		<div class="bloc-bord">

		<div class="bloc-profils">
			
			<p class="bonj-profil">Bonjour <?php echo $_SESSION['user']['user_firstname']; ?></p>

				<div class="edit-profil">
            		<a href=""><img class="img-profil" src="<?php echo $_SESSION['user']['user_photo']; ?>" alt=""></a>
            	</div>

            	<div id="bouton-table2">
                
                <a href="?module=site&action=profile&user_id=<?php echo $_SESSION['user']['ID']; ?>" class="bouton-table2" >MODIFIER PROFIL</a>

            	</div>
		</div>
		<div class="bloc-fond-accueil">
		<div class="fond-accueil">
			<div class="img-fond">

				<p class="title-bloc-profil">Prêt à accueillir ?</p>

					<div id="bouton-table3">
                
              			<a href="?module=site&action=setupevent" class="bouton-table3" >POSTE UN REPAS</a>

           			</div>
			</div>
		</div>
		</div>

		<div class="bloc-fond-accueil">
		<div class="fond-accueil">
		<div class="img-fond">

				<p class="title-bloc-profil">Prêt à diner ?</p>

					<div id="bouton-table3">
                
              			<a href="?module=site&action=cities" class="bouton-table3" >TROUVE TON DINER</a>

           			</div>
			</div>
			
		</div>

		</div>

		<div class="question">
				<p class="title-question">Une question ?</p>
				<p class="para-question">Si vous avez des questions , consultez notre <a class="lien-profil" href="?module=site&action=faq"> FAQ</a> ou <a class="lien-profil" href="?module=site&action=contact">envoyez-nous un mail</a> . Nous sommes toujours heureux de vous aider!</p>
			</div>

<?php
  include_once('view/layout/footer.inc.php');
?>