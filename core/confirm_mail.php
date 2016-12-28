<?php	
function mail_confirm($user_login, $id)
{
	// Génerer la frontière 
	$frontiere = md5(uniqid(mt_rand()));

$headers = 'From: eemicookandmeet@gmail.com'."\n";
$headers .='Reply-To: eemicookandmeet@gmail.com'."\n";
$headers .='MIME-Version: 1.0'."\n";
$headers .='Content-Type: multipart/mixed; boundary="'	.$frontiere.'"';
$sujet='Confirmation Inscription ';
$destinataire = $user_login;
$message_html="<html>
				<head>
					<title>Confirmation Inscription</title>
				</head>
				<body>
					Confirmation d'Inscription
					<p>
					<a href='http://ndri.etudiant-eemi.com/greg/cookandmeet?module=site&action=register2&id=".$id."'>
					CLIQUER ICI 
					</a><br/><br/>
					---------------
					Ceci est un mail automatique, Merci de ne pas y répondre.
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
//http://ndri.etudiant-eemi.com/greg/cookandmeet/activation.php?log='.urlencode($login).'&cle='.urlencode($cle).'>
?>
