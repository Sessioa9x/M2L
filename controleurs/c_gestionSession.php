<?php 
$action = $_REQUEST['action'];
$date=""; $datelimite="";$places="";$heuredebut="";
switch ($action) 
{
	case 'voirSessions':
		{
			$lesLieux = $pdo->getLesLieux();
			$lesFormations = $pdo->getLesFormations();
			$lesSessions = $pdo->getLesSessions();
			include("vues/v_gestionSession.php");
			include("vues/v_creaSession.php");
			break;
		}

	case 'creerSession':
		{
			$lesLieux = $pdo->getLesLieux();
			$lesFormations = $pdo->getLesFormations();
			$lesSessions = $pdo->getLesSessions();
			include("vues/v_gestionSession.php");
			include("vues/v_creaSession.php");
			break;
		}

	case 'voirSessions':
		{
			$lesLieux = $pdo->getLesLieux();
			$lesFormations = $pdo->getLesFormations();
			$lesSessions = $pdo->getLesSessions();
			include("vues/v_gestionSession.php");
			include("vues/v_creaSession.php");
			break;
		}
	
	
}
 ?>