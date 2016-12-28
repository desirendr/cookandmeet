<?php 
    include_once('view/layout/header.inc.php');
?>

        <h1 id="title-mdp">MES EVENTS</h1>
        <div id="bloc-event">
        <div class="total-bloc10">

            <?php foreach ($events as $event) { ?>
                

                <div  class="bloc-ville">

                    <div class="img-ville">
                        <a href="?module=site&action=eventinfo&event_id=<?php echo $event["event_id"]; ?>"><img class="hote1" src="<?php echo $event["location_photo"]; ?>" alt=""></a>
                    </div>
                    <div class="info-hote">
                        <div class="img-hote">
                        <a href="?module=site&action=profile&user_id=<?php echo $_SESSION["user"]["ID"]; ?>"><img class="img-chef" src="<?php echo $_SESSION["user"]["user_photo"]; ?>" alt=""></a>
                        </div>
                        <div class="info-complet">
                            <a href="?module=site&action=eventinfo&event_id=<?php echo $event["event_id"]; ?>"><p class="info-diner"><?php echo $event["event_name"]; ?></p></a>
                            <a href="?module=site&action=profile&user_id=<?php echo $_SESSION["user"]["ID"]; ?>"><h3 class="info-nom" ><?php echo $_SESSION["user"]["user_firstname"]; ?> <?php echo $_SESSION["user"]["user_lastname"]; ?></h3></a><br/>
                            <p><?php echo $event["city_name"]; ?>, <?php echo $event["location_district"]; ?></p>
                        </div>
                    <p class="prix-hote" ><?php echo $event["event_price"]; ?>€</p>
                </div>
                </div>

            <?php } ?>

            </div>

<?php 
    include_once('view/layout/footer.inc.php');
?>

