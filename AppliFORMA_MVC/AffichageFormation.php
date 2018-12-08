<?php 
include("Connexionbdd.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formation</title>
</head>
<body>
	<h1>Catalogues de Formation</h1>
<?php 
$reqaffichageforma = "SELECT NUM, ID_DOMAINE, NOM, CONTENU, COUT, OBJECTIF FROM formation";
$resultaff = $connexion->query($reqaffichageforma) or die("Une erreur est survenu dans la recupération des information : $reqaffichage");
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
echo "</table>"
 ?>
</body>
</html>