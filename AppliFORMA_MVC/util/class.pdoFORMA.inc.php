<?php 

class PdoFORMA
{
		private static $monPdo;
		private static $monPdoFORMA = null;

	private function __construct()
	{
			PdoFORMA::$monPdo = new PDO('mysql:host=127.0.0.1;dbname=forma','root','');//root =dylan mdp=dylan
			PdoFORMA::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct()
	{
		PdoFORMA::$monPdo = null;
	}

	public static function getPdoFORMA()
	{
		if (PdoFORMA::$monPdoFORMA == null) 
		{
			PdoFORMA::$monPdoFORMA= new PdoFORMA();
		}
		return PdoFORMA::$monPdoFORMA;
	}

	public function getLesDomaines()
	{
		$req = "select * from domaine_formation";
		$res = PdoFORMA::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function getLesFormations()
	{
		$req = "select * from formation";
		$res = PdoFORMA::$monPdo->query($req);
		$lesLignes = $res->fetchAll();
		return $lesLignes;
	}

	public function affichagerFormation()
	{

		$reqaffichageforma = "SELECT NUM, ID_DOMAINE, NOM, CONTENU, COUT, OBJECTIF FROM formation";
		$resultaff =PdoFORMA::$monPdo->query($reqaffichageforma) or die("Une erreur est survenu dans la recupération des information : $reqaffichage");
		$ligneaff = $resultaff->fetchAll();
			
			$reqaffichageforma = "SELECT NUM, ID_DOMAINE, NOM, CONTENU, COUT, OBJECTIF FROM formation";
		$resultaff =PdoFORMA::$monPdo->query($reqaffichageforma);
		$ligneaff = $resultaff->fetch();
			echo "<table border=1>";
			echo "<tr> <td>Numero</td> <td>Domaine</td> <td>Intitulé</td> <td>Contenu</td> <td>Cout</td> <td>Objectif</td> </tr> ";
		while ($ligneaff != false) 
		{
			$numforma = $ligneaff['NUM'];
			$domaineforma = $ligneaff['ID_DOMAINE'];
			$nomforma = $ligneaff['NOM'];
			$contenuforma = $ligneaff['CONTENU'];
			$coutforma = $ligneaff['COUT'];
			$objectifforma = $ligneaff['OBJECTIF'];

			echo "<tr> <td>$numforma</td> <td>$domaineforma</td> <td>$nomforma</td> <td>$contenuforma</td> <td>$coutforma</td> <td>$objectifforma</td> </tr> ";
			$ligneaff = $resultaff->fetch();

		}
			echo "</table>";
			
	}

	public function modiffierFormation($num,$id_domaine,$nom,$contenu,$objectif)
	{

	}

	public function creerFormation($num,$id_domaine,$nom,$contenu,$cout,$objectif)
	{

		$reqcreaform = "insert into formation values($num,$id_domaine,'$nom','$contenu',$cout,'$objectif');";
		$resultcrea = PdoFORMA::$monPdo->query($reqcreaform) or die ("erreur crea ; $reqcreaform");
	}

	public function supprimerUneFormation($numformation)
	{
		$req ="delete from formation where NUM = $numformation";
		$res = PdoFORMA::$monPdo->query($req) or die ($req);

	}

}

?>