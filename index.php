<?php 
session_start();
require_once("util/fonctions.inc.php");
require_once("util/class.pdoFORMA.inc.php");

include("vues/v_entete.php");
include("vues/v_menu.php");

if (!isset($_REQUEST['uc'])) 
{
	$uc = 'formconnexion';
}
else
{
	$uc = $_REQUEST['uc'];
}
$pdo = PdoFORMA::getPdoFORMA();
switch ($uc) {
	case 'allerconnexion':
		{include("controleurs/c_connexion.php");break;}

	case 'formconnexion':
		{include("vues/v_connexion.php");break;}

	case 'accueil':
		{
			if (isset($_SESSION['ok']) && $_SESSION['ok'] == "admin" || $_SESSION['ok'] == "participant") 
			{
				
     			include("vues/v_accueil.php");
			}
			else
			{
				header("Location:index.php?uc=formconnexion");
			}
			
			break;}
	
	case 'voirFormation' :
		{include("controleurs/c_voirFormation.php");break;}

	case 'gestionFormation':
		{include("controleurs/c_gestionFormation.php");break;}

	case 'gestionSession':
		{include("controleurs/c_gestionSession.php");break;}
			
}
?>
