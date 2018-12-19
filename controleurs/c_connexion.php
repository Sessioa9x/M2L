<?php 
$action = $_REQUEST['action'];
switch ($action) {
	case 'connexion':
		{
			$login = $_REQUEST['login'];
			$mdp = $_REQUEST['mdp'];
			$pdo->connexion($login,$mdp);
			break;
		}
	
	case 'deconnexion':
		{
			$_SESSION['ok'] ="non";
			header("Location:index.php?uc=formconnexion");
			break;
		}
}
 ?>