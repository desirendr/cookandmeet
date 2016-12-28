<?php
	include_once('view/layout/header.inc.php');
?>

<div class="slider-diner">
        <div class="photo-diner">
          
        </div>
        </div>

        <div class="description-menu">
          <div class="info-diner-description">
          <p class="description-nom-diner"><?php echo $event["event_name"]; ?></p>
          <p class="description-ville" ><?php echo $event["city_name"]; ?>, <?php echo $event["location_district"]; ?></p>

          <div class="info-diner-hote" >

            </div>

            <div class="info-diner2" >

             <ul>
                <li>Régime alimentaire : <?php echo $event["dishtype_name"]; ?></li>
              </ul>
              
            </div>

            <div class="info-diner3" >

             <ul>
                <li>Type de repas : <?php echo $event["eventtype_name"]; ?></li>
                <li>Nombres de couverts : <?php echo $event["event_guest"]; ?></li>
              </ul>
              
            </div>

          </div>


           <p class="info-entree">ENTREES</p>
          
          <p class="description-entree">
          </p>

          <hr/>

          <p class="info-entree">PLATS</p>
          
          <p class="description-entree">
          </p>

           <hr/>

          <p class="info-entree">DESSERTS</p>
          
          <p class="description-entree2">
          </p>
          

            
        </div>
        </div>
       

        <div class="descritpion-hote">
          <div class="img-description-hote">
            <a href="?module=site&action=profile&user_id=<?php echo $event["CAM_users_ID"]; ?>"><img class="img-chef-hote" src="<?php echo $event["user_photo"]; ?>" alt=""></a>
            </div>
            <p class="info-nom-diner"><strong> Diner chez <?php echo $event["user_firstname"]; ?></strong></p>
            <p class="descirption-hote"><?php echo $event["user_description"]; ?></p>
            <p class="info-date">Date : <?php echo $event["event_date"]; ?></p>
            <p class="info-prix">Prix : <?php echo $event["event_price"]; ?>€</p>

      <div id="bouton-reservez">


                <?php if (sizeof($guests) >= $event["event_guest"]){ ?>
                <p>L'événement est complet </p>
                <?php } 
                elseif($_SESSION['user']['ID'] == $invited['CAM_users_ID']){ ?>

                <a href="?module=site&action=index&event_id=<?php echo $event["event_id"]; ?>&user_id=<?php echo $_SESSION['user']['ID']; ?>" class="bouton-reservez" >SE DESINSCRIRE</a>

                <?php } elseif ($_SESSION['user']['ID'] == $event['CAM_users_ID']){ ?>

                <a href="?module=site&action=index&del_event=<?php echo $event["event_id"]; ?>" class="bouton-reservez" >ANNULER</a>

                <?php } else { ?>
                <a href="?module=site&action=eventpay&event_id=<?php echo $event["event_id"]; ?>&user_id=<?php echo $_SESSION['user']['ID']; ?>" class="bouton-reservez" >S'INSCRIRE</a>
                <?php } ?>

            </div>
            </div>
          

        <div class="descritpion-hote">
        <?php if (empty($guests)){ ?>
          <p>Pas d'invités pour le moment</p>
        <?php } else {
          foreach ($guests as $guest){ ?>
        <div class="info-descritpion-hote">
          <div class="img-description-hote">
            <a href=""><img class="img-chef-hote2" src="<?php echo $guest["user_photo"]; ?>" alt="photo_invité"></a>
            </div>
            <div>
           <p class="info-nom-diner"><strong><?php echo $guest["user_firstname"]; ?></strong></p>
            <p class="descirption-hote2"><?php echo $guest["user_description"]; ?></p>
            </div>
            </div>
            <?php } }?>


      <div id="bouton-reservez">
                
                <a href="?module=site&action=guestlist&event_id=<?php echo $event["event_id"]; ?>" class="bouton-reservez">TOUS LES INVITÉS</a>

            </div>
            </div>

              <div class="descritpion-hote2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.818640602348!2d2.3380365512777335!3d48.8807337791881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e46ba53eb53%3A0x772b1b017ea96bf!2sRue+des+Martyrs%2C+Paris!5e0!3m2!1sfr!2sfr!4v1453915307988" width="100%" height="474" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
<?php
	include_once('view/layout/footer.inc.php');
?>