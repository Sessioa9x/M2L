
<h3>Les Formations</h3>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-7">

	<table class="table table-hover">
		
	<tr>
		<?php 
				foreach ($lesFormations as $uneFormation) {
					$numF= $uneFormation['NUM'];
					$domaineF = $uneFormation['ID_DOMAINE'];
					$nomF = $uneFormation['NOM'];
					$contenuF = $uneFormation['CONTENU'];
					$coutF = $uneFormation['COUT'];
					$objectifF = $uneFormation['OBJECTIF'];
				
		 ?>
		 	<td><?=$numF ?></td>
		 	<td><?=$nomF ?></td>
		 	<td><?=$coutF ?>€</td>
		 	<td width="20%"><a href="index.php?uc=gestionFormation&formation=<?=$numF ?>&domaine=<?=$domaineF ?>&nom=<?=$nomF ?>&contenu=<?=$contenuF ?>&cout=<?=$coutF ?>&objectif=<?=$objectifF ?>&action=accemodifierFormation"> Modifier la formation </a></td>
		 	<td width="30%"><a href="index.php?uc=gestionFormation&formation=<?=$numF ?>&action=supprimerFormation"> Supprimer la formation </a></td>

	</tr>
	
<?php } ?>
	</table>
</div>
</div>
</div>