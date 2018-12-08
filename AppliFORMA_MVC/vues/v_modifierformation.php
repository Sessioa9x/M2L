<form method="post" action="index.php?uc=gestionFormation&formation=<?=$numformation ?>&action=modifierFormation">
	<p>Les Formations</p>
	<table>
	<tr>
		<?php 
				foreach ($lesFormations as $uneFormation) {
					$numF= $uneFormation['NUM'];
					$domaineF = $uneFormation['ID_DOMAINE'];
					$nomF = $uneFormation['NOM'];
					$contenu = $uneFormation['CONTENU'];
					$cout = $uneFormation['COUT'];
					$objectif = $uneFormation['OBJECTIF'];
				
		 ?>
		 	<td><?=$numF ?></td>
		 	<td><?=$nomF ?></td>
		 	<td><?=$cout ?>€</td>
		 	<td><a href="index.php?uc=gestionFormation&formation=<?=$numF ?>&action=modifierFormation"> Modifier la formation </a></td>
		 	<td><a href="index.php?uc=gestionFormation&formation=<?=$numF ?>&action=supprimerFormation"> Supprimer la formation </a></td>

	</tr>
	
<?php } ?>
	</table>
</form>
