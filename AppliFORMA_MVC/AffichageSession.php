<?php 
include("Connexionbdd.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Session disponible</h1>
<?php 
echo date('Y:m:j');
$datejour = date('Y:m:j');
$reqaffichagesession = "SELECT ID_SESSION, NUM, ID_LIEU, DATE_FORMATION, NBPLACE, DATE_LIMITE, HEURE_FORMATION from session where DATE_FORMATION < '$datejour'";
$resultaffsess = $connexion->query($reqaffichagesession) or die("Une erreur est survenu dans la recupération des information : $reqaffichagesession");
$ligneaffsess = $resultaffsess->fetch();


 ?>
</body>
</html>