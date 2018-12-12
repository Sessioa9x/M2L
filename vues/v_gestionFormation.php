<h3>Les Formations</h3>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-11">

	<table class="table table-hover">
		<tr> <th scope='col'>Numero</th> <th scope='col'>Domaine</th> <th scope='col'>Intitulé</th> <th scope='col'>Contenu</th> <th scope='col'>Cout</th> <th scope='col'>Objectif</th> <th colspan="2"></th> </tr>
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
		 	<td><?=$domaineF ?></td>
		 	<td><?=$nomF ?></td>
		 	<td><?=$contenuF ?></td>
		 	<td><?=$coutF ?>€</td>
		 	<td><?=$objectifF ?></td>
		 	<td width=""><a href="index.php?uc=gestionFormation&formation=<?=$numF ?>&domaine=<?=$domaineF ?>&nom=<?=$nomF ?>&contenu=<?=$contenuF ?>&cout=<?=$coutF ?>&objectif=<?=$objectifF ?>&action=accemodifierFormation"> Modifier la formation </a></td>
		 	<td width=""><a href="index.php?uc=gestionFormation&formation=<?=$numF ?>&action=supprimerFormation"> Supprimer la formation </a></td>

	</tr>
	
<?php } ?>
	</table>
</div>
</div>
</div>