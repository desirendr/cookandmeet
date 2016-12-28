<?php	
function mail_offi($destinataire, $id)
{
	// Génerer la frontière 
	$frontiere = md5(uniqid(mt_rand()));

$headers = 'From: eemicookandmeet@gmail.com'."\n";
$headers .='Reply-To: eemicookandmeet@gmail.com'."\n";
$headers .='MIME-Version: 1.0'."\n";
$headers .='Content-Type: multipart/mixed; boundary="'	.$frontiere.'"';
$sujet='Test Mail PHP';

$message_html="<html>
				<head>
					<title>Oublie de mot de passe</title>
				</head>
				<body>
					Test de <strong>mail</strong> par HTML
					<p>
						Mon <a href='http://ndri.etudiant-eemi.com/cookandmeet?module=site&action=oublie_mdp2&id=".$id."'>CLIQUE yalla2ICI</a>
					</p>
				</body>
				</html>";

$message = 'This is a multi-part message in MIME format.'."\n\n";
$message .= '--'.$frontiere."\n";
$message .= 'Content-Type: text/html; charset="utf-8"'."\n";
$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
$message .= $message_html."\n\n";

	return mail($destinataire, $sujet, $message, $headers);
};
?>
