<?php 
$action = $_REQUEST['action'];
switch ($action) {
	case 'voirFormations':
	{
		$lesFormations = $pdo->affichagerFormation();
		include("vues/v_affichageformation.php");
		break;
	}

	
	
	default:
		# code...
		break;
}
 ?>