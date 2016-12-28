<?php
	include_once('view/layout/header.inc.php');
?>
	    	<div class="reservation">
	    		<p class="title-resa">Réservation</p>
	    		<div class="bord-resa"></div>
	    		<p class="title-resum">Résumé de l'evènement</p>
	    		<p class="resum-event">UN EVENEMENT</p>
	    		<div class="bord-event" ></div>
	    		<div class="resu">
	    			<div>
	    				<a href="?module=site&action=eventinfo"><img class="resa1" src="assets/img/hote3.jpg" alt=""></a>
	    			</div>
	    			<div class="info-event-resum">
	    				<p>Diner : nom du diner</p>
	    				<p>Date</p>
	    				<p>Heure du diner</p>
	    			</div>
	    			
	    		</div>
	    		
	    	</div>
	    	<div class="resum-reservation">
	    	<div class="tablo-resa">
	    		<p>Diner : nom du diner</p>
	    		<p>Date</p>
	    		<p>Ville, FRANCE</p>
	    	</div>
	    		<div class="bord-resa-tablo" ></div>
	    		<div class="resa-tablo-prix">
	    		<div class="tablo-resa2">
	    		<p>€ 30,00 x 1 repas </p>
	    		</div>
	    		
	    		<div class="tablo-prix">
	    		<p>30,00 €</p>
	    		</div>
	    		</div>
	    	
	    		<div class="bord-resa-tablo"></div>
	    		<div class="resa-tablo-prix">
	    		<div class="tablo-resa2">
	    		<p>Frais Cook and Meet</p>
	    		</div>
	    		<div class="tablo-prix2">
	    		<p>4,50 €</p>
	    		</div>
	    		</div>
	    		<div class="bord-resa-tablo" ></div>
	    		<div class="resa-tablo-prix">
	    		<div class="tablo-resa3">
	    		<p>Total</p>
	    		</div>
	    		<div class="tablo-prix3">
	    		<p>34,50 €</p>
	    		</div>
	    		</div>
	    		<div id="bouton-reservez2">
                
                <a href="?module=site&action=payment" class="bouton-reservez2" >RESERVEZ</a>

            </div>
	    		
	    	</div>

<?php
	include_once('view/layout/footer.inc.php');
?>