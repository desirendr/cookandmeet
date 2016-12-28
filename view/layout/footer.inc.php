<div class="footer-diner">
      

    <div id="footer"> <!--debut footer-->

        <div id="foot">

        <div id="espacecontact" class="box">

          <h5 id="contacteznous">Contactez-nous</h5>

            <p id="contact">28 Place de la Bourse</br> 75002 Paris</p>
            <p id="contact2">01 46 34 11 16</p>

            <div class="mesicones">

              <a href="https://www.facebook.com/Cook-and-Meet-423413171199322/?fref=ts"><img class="mesreseauxsociaux" src="assets/img/facebook.png" alt=""></a>
              <a href="https://plus.google.com/u/0/106781348582278403909"><img class="mesreseauxsociaux" src="assets/img/google.png" alt=""></a>
              <a href="https://www.youtube.com/channel/UCiBe1xQXDvyh7ryunwkUruA"><img class="mesreseauxsociaux" src="assets/img/youtube.png" alt=""></a>
            
            </div>

            <div class="mesicones-mobile">

              <a href="https://www.facebook.com/Cook-and-Meet-423413171199322/?fref=ts" target="parent"><img class="mesreseauxsociaux" src="assets/img/facebook-mobile.png" alt=""></a>
              <a href="https://plus.google.com/u/0/106781348582278403909" target="parent"><img class="mesreseauxsociaux" src="assets/img/google-mobile.png" alt=""></a>
              <a href="https://www.youtube.com/channel/UCiBe1xQXDvyh7ryunwkUruA" target="parent"><img class="mesreseauxsociaux" src="assets/img/youtube-mobile.png" alt=""></a>
            
            </div>

          </div>


        

        <div id="espaceinfo" class="box">
  
          <h5>Plus d'infos</h5>

            <ul>

              <li><a href="?module=site&action=a-propos">A propos</a></li>
              <li><a href="?module=site&action=contact">Contact</a></li>
              <li><a href="?module=site&action=faq">FAQ</a></li>
              <li><a href="?module=site&action=cgu">CGU</a></li>
            </ul>
          
        </div>

        <div id="espacecookandmeeteur" class="box">

          <h5>Devenir un Meeteur</h5>

            <ul id="col3">


              <li><a href="?module=site&action=register">S'inscrire</a></li>

            </ul>

          </div>

        </div>
      </div>

        
      </div> <!--fin footer-->
      </div>
    </div>
    
      <?php if (isset($_GET['notif'])) {

          if($_GET['notif']=='pok') { ?>
        <div class="popup-inner-notif">
            <p class="popup-notif">Un email vient de vous être envoyé pour modifier votre mot de passe</p>
            <!-- <a class="popup-close" id="degage" data-popup-close="popup-1" href="#">x</a> -->
        </div>

          <?php } 
          elseif($_GET['notif']=='vok') { ?>
        <div class="popup-inner-notif">
            <p class="popup-notif">Votre mot de passe a été modifié avec succès</p>
            <!-- <a class="popup-close" id="degage" data-popup-close="popup-1" href="#">x</a> -->            
        </div>

          <?php } 
          elseif($_GET['notif']=='nok') { ?>
        <div class="popup-inner-notif">
            <p class="popup-notif">⟁ Une erreur est survenue ⟁ </p>
            <!-- <a class="popup-close" id="degage" data-popup-close="popup-1" href="#">x</a> -->            
        </div>   

          <?php }
          elseif($_GET['notif']=='bok') { ?>
        <div class="popup-inner-notif">
            <p class="popup-notif">⟁ Votre adresse mail est invalide ⟁</p>
            <!-- <a class="popup-close" id="degage" data-popup-close="popup-1" href="#">x</a> -->            
        </div>

          <?php }
          elseif($_GET['notif']=='rok') { ?>
        <div class="popup-inner-notif">
            <p class="popup-notif">⟁ Votre formulaire est invalide ⟁</p>
            <!-- <a class="popup-close" id="degage" data-popup-close="popup-1" href="#">x</a> -->            
        </div> 

          <?php }
          elseif($_GET['notif']=='mok') { ?>
        <div class="popup-inner-notif">
            <p class="popup-notif">Vous avez été correctement inscris ! <br>
              Veuillez-vous connecter ! :)</p>
            <!-- <a class="popup-close" id="degage" data-popup-close="popup-1" href="#">x</a> -->            
        </div> 

        <?php }
      }; ?>

<script>
var popup = $('.popup-inner-notif'),
    time;
 
time = setTimeout(function(){
    popup.fadeOut(500);
    clearTimeout(time);
}, 4500);
</script>

  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/jquery-ui.js"></script> 
  <script type="text/javascript" src="assets/js/script.js"></script>


</body>
</html>