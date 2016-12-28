<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mail</title>
        <link rel="stylesheet" href="css/TP-style.css">
    </head>
<body>
	<div class="container">

<h1>Mail et Upload - Sayer & N'Dri</h1>

<form action="?module=site&action=oublie_mdp2" method="post">

	<label>Veuillez rentrer votre nouveau MDP :</label> <br> 

	<input name="modifmdp" type="password" required="required">
	<input name="id" type="hidden" value="<?= $_GET['id']; ?>" required="required">

	<br>

	<input type="submit" value="Envoyer">

</form>

<!-- SELECT BASE DE DONNEE -->

</body>
</html>