<?php

if(!isset($_SESSION['membre'])){//si la session m'embre n'existe pas..

header('location:'.URL.'?page=connexion');

}

	$content.='Bonjour <strong>'.$_SESSION['membre']['pseudo'].'</strong></br>';
	//$_SESSION me permet d'aller chercher les informations dans le fichier
$content.= 'vos informations sont:';
$content.= 'pseudo =>'.$_SESSION['membre']['pseudo'].'<br>';
$content.= 'nom =>'.$_SESSION['membre']['nom'].'<br>';
$content.= 'prenom =>'.$_SESSION['membre']['prenom'].'<br>';
$content.= 'email =>'.$_SESSION['membre']['email'].'<br>';
$content.= 'civilite =>'.$_SESSION['membre']['civilite'].'<br>';