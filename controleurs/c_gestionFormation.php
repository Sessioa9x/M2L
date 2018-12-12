<?php 
$action = $_REQUEST['action'];
$numformation = "";
$domaine = "";$nomC=""; $contenuC ="";$coutC = ""; $objectifC="";
if (isset($_REQUEST["messages"])) 
{
	$message = $_REQUEST["messages"];
	include("vues/v_message.php");
}
switch ($action) {
	case 'voirFormations':
	{
		$lesDomaines = $pdo->getLesDomaines();
		
		$lesFormations = $pdo->getLesFormations();
		include("vues/v_gestionFormation.php");
		include("vues/v_creationFormation.php");
		break;
	}
	case 'accemodifierFormation':
	{
		$numformation = $_REQUEST['formation'];
		$lesDomaines = $pdo->getLesDomaines();
		$domaine = $_REQUEST['domaine'];$nom=$_REQUEST['nom']; $contenu =$_REQUEST['contenu'];$cout = $_REQUEST['cout']; $objectif=$_REQUEST['objectif'];
		include("vues/v_formmodifforma.php");

		break;
	}
	case 'modifierFormation':
	{
		$numformation = $_REQUEST['formationp'];
		$domaine = $_POST['domaine'];$nom=$_POST['nom']; $contenu =$_POST['contenu'];$cout = $_POST['cout']; $objectif=$_POST['objectif'];
		$message = "Vous n'avez pas modifier les informations de cette formation";
		
		if ($pdo->modiffierFormation($numformation,$domaine,$nom,$contenu,$cout,$objectif) == false)
		 {
			include("vues/v_message.php");
		}
		else
		{
			$modif = $pdo->modiffierFormation($numformation,$domaine,$nom,$contenu,$cout,$objectif);
		}
		$lesDomaines = $pdo->getLesDomaines();
		$lesFormations = $pdo->getLesFormations();
		include("vues/v_gestionFormation.php");
		include("vues/v_creationFormation.php");

		break;
	}
		

	case 'supprimerFormation':
	{
		$numformation = $_REQUEST['formation'];
		
		$pdo->supprimerUneFormation($numformation);
		$lesDomaines = $pdo->getLesDomaines();
		$lesFormations = $pdo->getLesFormations();
		include("vues/v_gestionFormation.php");
		include("vues/v_creationFormation.php");

		break;
	}
		
		

	case 'creerFormation':
	{
		$domaineC =$_REQUEST['domainec']; $nomC =$_REQUEST['nomForm']; $contenuC =$_REQUEST['contenu'];$coutC= $_REQUEST['cout']; $objectifC =$_REQUEST['objectif'];
		$message = "Evitez les caractére spéciaux s'il vous plaît";
		$pdo->creerFormation($domaineC,$nomC,$contenuC,$coutC,$objectifC);

		
		$lesDomaines = $pdo->getLesDomaines();
		$lesFormations = $pdo->getLesFormations();
		include("vues/v_gestionFormation.php");
		include("vues/v_creationFormation.php");

		break;
	}

	case 'voirSessions':
	{
		$lesFormations = $pdo->getLesFormations();
		$lesSessions = $pdo->getLesSessions();
		include("vues/v_gestionSession.php");
		include("vues/v_creaSession.php");
		break;
	}
		
		
	
}
 ?>