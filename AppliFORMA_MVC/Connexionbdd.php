<?php 
$hote = "localhost";
$login= "root";
$mdp= "";
$nombdd = "forma";
$connexion="";
try {
	$connexion = new PDO("mysql:host=$hote;dbname=$nombdd",$login , $mdp);
	
} catch (Exception $e) {
	 		
	 		die("\n Connection à '$hote' impossible :  ".$e->getMessage());
}
 ?>