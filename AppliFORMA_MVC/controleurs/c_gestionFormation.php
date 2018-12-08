<?php 
$action = $_REQUEST['action'];
$numformation = "";
$numero = "";$domaine = "";$nom=""; $contenu ="";$cout = ""; $objectif="";
switch ($action) {
	case 'voirFormations':
	{
		$lesDomaines = $pdo->getLesDomaines();
		$lesFormations = $pdo->affichagerFormation();
		include("vues/v_gestionFormation.php");
		include("vues/v_creationFormation.php");
		break;
	}
	case 'accemodifierFormation':
	{

		$lesFormations = $pdo->getLesFormations();
		include("vues/v_modifierformation.php");
		

		break;
	}
	case 'modifierFormation':
	{
		$numformation = $_REQUEST['formation'];


		break;
	}
		

	case 'supprimerFormation':
	{
		$numformation = $_REQUEST['formation'];
		
		$pdo->supprimerUneFormation($numformation);
		$lesFormations = $pdo->getLesFormations();
		include("vues/v_modifierformation.php");

		break;
	}
		
		

	case 'creerFormation':
	{
		$numero = $_REQUEST['numero'];$domaine =$_REQUEST['domaine']; $nom =$_REQUEST['nomForm']; $contenu =$_REQUEST['contenu'];$cout= $_REQUEST['cout']; $objectif =$_REQUEST['objectif'];

		$crea = $pdo->creerFormation($numero,$domaine,$nom,$contenu,$cout,$objectif);
		include("vues/v_gestionFormation.php");
		include("vues/v_creationFormation.php");

		break;
	}
	
	default:
		# code...
		break;
}
 ?>