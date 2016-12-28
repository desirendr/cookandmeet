<?php	
function contact_mail($nom_expediteur, $email_expediteur, $message_texte, $sujet)
// $_POST['nom'] = $nom_expéditeur;
{
	// Génerer la frontière 
	$frontiere = md5(uniqid(mt_rand()));

$headers = 'From: "'.$nom_expediteur.'" <'.$email_expediteur.'>'."\n";
$headers .= 'Return-path: <'.$email_expediteur.'>'."\n";
$headers .= 'MIME-Version: 1.0'."\n";
$headers .= 'Content-Type: multipart/mixed; boundary="'	.$frontiere.'"';
$destinataire ='EEMIcookandmeet@gmail.com';	

	if ($message_texte !='') {
		$message = '--'.$frontiere."\n";
		$message .= 'Content-Type: text/plain; charset="utf-8"'."\n";
		$message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
		$message .= $message_texte."\n\n";
	}

	// Envoi du mail
	return mail($destinataire, $sujet, $message, $headers);

}
?>
