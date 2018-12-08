
<h3>Les Sessions</h3>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-11">

	<table class="table table-hover">
		<tr>
		<th>ID</th><th>Nom formation</th><th>Domaine de formation</th> <th>Adresse</th> <th>Date de la session</th> <th> Heure</th> <th>Nombre de place maximum</th> <th>Date limite d'inscription</th> <th colspan="2"></th>
	</tr>
	<tr>
		<?php 
				foreach ($lesSessions as $unesession) {
					$id = $unesession['ID_SESSION'];
					$nom = $unesession['NOM'];
					$domaine = $unesession['DOMAINE'];
					$adresse = $unesession['ADRESSE'];
					$datef = $unesession['DATE_FORMATION'];
					$place = $unesession['NBPLACE'];
					$limite = $unesession['DATE_LIMITE'];
					$heure = $unesession['HEURE_FORMATION'];
				
		 ?>

		 <td><?=$id ?></td>
		 <td><?=$nom ?></td>
		 <td><?=$domaine ?></td>
		 <td><?=$adresse ?></td> 
		 <td><?=$datef ?></td> 
		 <td><?=$heure ?></td>
		 <td><?=$place ?></td> 
		 <td><?=$limite ?></td> 
		 

		 	<td width=""><a href="index.php?uc=gestionFormation&action=accemodifierFormation"> Modifier la session </a></td>
		 	<td width=""><a href="index.php?uc=gestionFormation&action=supprimerFormation"> Supprimer la session </a></td>

	</tr>
	
<?php } ?>
	</table>
</div>
</div>
</div>