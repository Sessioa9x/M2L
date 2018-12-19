<?php 

/** 
 * Classe d'accès aux données. 
 * Utilise les services de la classe PDO
 * pour l'application FORMA
 * Les attributs sont tous statiques
 * $monPdo de type PDO 
 * $monPdoFORMA qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Dylan LAGARDE
 * @version    1.0

 */

class PdoFORMA
{
		private static $monPdo;
		private static $monPdoFORMA = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */	
	private function __construct()
	{
			PdoFORMA::$monPdo = new PDO('mysql:host=127.0.0.1;dbname=forma','root','');//root =dylan mdp=dylan
			PdoFORMA::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct()
	{
		PdoFORMA::$monPdo = null;
	}

/**
 * Fonction statique qui crée l'unique instance de la classe
 *
 * Appel : $instancePdoFORA = PdoFORMA::getPdoFORMA();
 * @return l'unique objet de la classe PdoFORMA
 */
	public static function getPdoFORMA()
	{
		if (PdoFORMA::$monPdoFORMA == null) 
		{
			PdoFORMA::$monPdoFORMA= new PdoFORMA();
		}
		return PdoFORMA::$monPdoFORMA;
	}

/**
 * Retourne tout les domaines de formation sous forme d'un tableau associatif
 *
 * @return le tableau associatif des domaines 
*/
	public function getLesDomaines()
	{
		$req = "select * from domaine_formation";
		$res = PdoFORMA::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}
/**
 * Retourne toutes les formation sous forme d'un tableau associatif
 *
 * @return le tableau associatif des formations 
*/
	public function getLesFormations()
	{
		$req = "select * from formation";
		$res = PdoFORMA::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

/**
 * Retourne toutes les sessions de formation sous forme d'un tableau associatif
 *
 * @return le tableau associatif des sessions 
*/
	public function getLesSessions()
	{
		$req = "select 	ID_SESSION, NOM, DOMAINE, ADRESSE, DATE_FORMATION, NBPLACE, DATE_LIMITE, HEURE_FORMATION  from session, formation, lieu_formation, domaine_formation where 	session.NUM = formation.NUM and lieu_formation.ID_LIEU = session.ID_LIEU and formation.ID_DOMAINE = domaine_formation.ID_DOMAINE ";
		$res = PdoFORMA::$monPdo->query($req) or die ($req);
		$leslignes = $res->fetchAll();
		return $leslignes;
	}

	public function getLesLieux()
	{
		$req = "select * from lieu_formation";
		$res = PdoFORMA::$monPdo->query($req);
		$leslignes = $res->fetchAll();
		return $leslignes;
	}

/**
 * Affiche toutes les Formation sous forme d'un tableau
 *
 *
*/
	public function affichageFormation()
	{

		$reqaffichageforma = "SELECT NUM, ID_DOMAINE, NOM, CONTENU, COUT, OBJECTIF FROM formation";
		$resultaff =PdoFORMA::$monPdo->query($reqaffichageforma) or die("Une erreur est survenu dans la recupération des information : $reqaffichage");
		$ligneaff = $resultaff->fetchAll();
			
			$reqaffichageforma = "SELECT NUM, ID_DOMAINE, NOM, CONTENU, COUT, OBJECTIF FROM formation";
		$resultaff =PdoFORMA::$monPdo->query($reqaffichageforma);
		$ligneaff = $resultaff->fetch();
			echo "<table class='table table-hover'>";
			echo "<tr> <th scope='col'>Numero</th> <th scope='col'>Domaine</th> <th scope='col'>Intitulé</th> <th scope='col'>Contenu</th> <th scope='col'>Cout</th> <th scope='col'>Objectif</th> </tr> ";
		while ($ligneaff != false) 
		{
			$numforma = $ligneaff['NUM'];
			$domaineforma = $ligneaff['ID_DOMAINE'];
			$nomforma = $ligneaff['NOM'];
			$contenuforma = $ligneaff['CONTENU'];
			$coutforma = $ligneaff['COUT'];
			$objectifforma = $ligneaff['OBJECTIF'];

			echo "<tr> <td scope='row'>$numforma</td> <td>$domaineforma</td> <td>$nomforma</td> <td>$contenuforma</td> <td>$coutforma</td> <td>$objectifforma</td> </tr> ";
			$ligneaff = $resultaff->fetch();

		}
			echo "</table>";
			
	}

	public function modiffierFormation($num,$id_domaine,$nom,$contenu,$cout,$objectif)
	{
		$req = "select * from formation where NUM = $num";
		$res = PdoFORMA::$monPdo->query($req) or die($req);
		$ligne = $res->fetch();
		$bool = true;

		if ($ligne['ID_DOMAINE'] == $id_domaine && $ligne['NOM'] == $nom && $ligne['CONTENU'] == $contenu && $ligne['COUT'] == $cout && $ligne['OBJECTIF'] == $objectif ) 
		{
			$bool = false;
		}
		else
		{

			$reqm = "update formation set ID_DOMAINE = $id_domaine, NOM = '$nom', CONTENU = '$contenu', COUT = '$cout', OBJECTIF = '$objectif' where NUM = $num";
			$resm = PdoFORMA::$monPdo->exec($reqm) or die($reqm);
		}
		return $bool;
	}

	public function creerFormation($id_domaine,$nom,$contenu,$cout,$objectif)
	{	
			$reqcreaform = "insert into formation values(NULL,$id_domaine,'$nom','$contenu',$cout,'$objectif');";
			$resultcrea = PdoFORMA::$monPdo->exec($reqcreaform) or die (header("Location: index.php?uc=gestionFormation&messages=Evitez les caractére spéciaux s'il vous plaît &action=voirFormations"));
	}

	public function supprimerUneFormation($numformation)
	{
		$req ="delete from formation where NUM = $numformation";
		$res = PdoFORMA::$monPdo->query($req) or die ($req);

	}

	public function connexion($loginsaisie,$mdpsaisie)
	{
		
		$req = "select mdp_admin from administrateur where util_admin = '$loginsaisie'";
		$res = PdoFORMA::$monPdo->query($req);
		$ligne = $res->fetch();

		$mdpbdd = $ligne['mdp_admin'];

		
			$req = "select mdp from participant where nom = '$loginsaisie'";
			$res = PdoFORMA::$monPdo->query($req);
			$ligne = $res->fetch();
			$mdpbdd2 = $ligne['mdp'];
		
		


		if ($mdpsaisie != $mdpbdd )
		{
			if ($mdpsaisie != $mdpbdd2) 
			{
				$message = "Vous ete un imposteur !!! ";
				include("vues/v_message.php");
			}
			else
			{
				$_SESSION['ok'] = "participant";
				header("Location:index.php?uc=accueil");
			}
			
		}
		else
		{
			
			$_SESSION['ok'] = "admin";
			header("Location:index.php?uc=accueil");
		}

		
	}

	public function ajouterSession()
	{
		
	}


}

?>