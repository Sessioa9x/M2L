<?php 
session_start();
require_once("util/fonctions.inc.php");
require_once("util/class.pdoFORMA.inc.php");

include("vues/v_entete.php");
include("vues/v_menu.php");

if (!isset($_REQUEST['uc'])) 
{
	$uc = 'accueil';
}
else
{
	$uc = $_REQUEST['uc'];
}
$pdo = PdoFORMA::getPdoFORMA();
switch ($uc) {
	case 'accueil':
		{include("vues/v_accueil.php");break;}
	
	case 'voirFormation' :
		{include("controleurs/c_voirFormation.php");break;}

	case 'gestionFormation':
		{include("controleurs/c_gestionFormation.php");break;}
			
}


?>
