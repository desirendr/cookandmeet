<?php
include_once('view/layout/header.inc.php');
?>

<p>t<br>
	t<br>
	t<br>
	t<br>
	t<br>
	t<br>
	t<br>
	t<br>
	t<br>
	t<br>
	t<br>
</p>
<form action="?module=site&action=oublie_mdp" method="post">

	<label>Veuillez rentrer votre adresse mail :<map> </map></label><br><input name="destinataire" type="text" required="required"><br><br>

	<input type="submit" value="Envoyer">
</form>

<?php
	include("view/layout/footer.inc.php");
?>