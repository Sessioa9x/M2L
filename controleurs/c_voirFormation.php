<?php 
$action = $_REQUEST['action'];
switch ($action) {
	case 'voirFormations':
	{
		$lesFormations = $pdo->affichageFormation();
		
		break;
	}

	case 'voirSession':
	{
		$lesSessions = $pdo->getLesSessions();
		
		include("vues/v_affichageSession.php");
		break;
	}

	
	
	default:
		# code...
		break;
}
 ?>