<?php
	include_once('view/layout/header.inc.php')
?>

<h1 class="title-invite">TOUS LES INVITÉS</h1>

<div class="part1-marche">

			<?php if (empty($guests)){ ?>

          	<p>Pas d'invités pour le moment</p>

       		<?php } else { foreach($guests as $guest){ ?>
			<div class="marche1">
				<div class="marche-icon">
				<div class="hi-icon-hote-wrap hi-icon-hote-effect-1 hi-icon-hote-effect-1a">
				<a href="?module=site&action=profile&user_id=<?php echo $guest["CAM_users_ID"]; ?>"><img class="img-chef-invite" src="<?php echo $guest["user_photo"]; ?>" alt="photo_utilisateur"></a>
				</div>
				</div>
				<div class="marche-info">
					<h2 id="title-marche"><?php echo $guest["user_firstname"]; ?><?php echo $guest["user_lastname"]; ?></h2>
					<p><?php echo $guest["user_description"]; ?></p>
				</div>
			</div>

			<?php } } ?>
 </div>

<?php
	include_once('view/layout/footer.inc.php')
?>