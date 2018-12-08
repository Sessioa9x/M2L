<table class="table table-hover">
	<tr>
		<th>ID</th><th>Nom formation</th><th>Domaine de formation</th> <th>Adresse</th> <th>Date de la session</th> <th> Heure</th> <th>Nombre de place maximum</th> <th>Date limite d'inscription</th> 
	</tr>
<?php 

foreach ($lesSessions as $unesession) 
{
	$id = $unesession['ID_SESSION'];
	$nom = $unesession['NOM'];
	$domaine = $unesession['DOMAINE'];
	$adresse = $unesession['ADRESSE'];
	$datef = $unesession['DATE_FORMATION'];
	$place = $unesession['NBPLACE'];
	$limite = $unesession['DATE_LIMITE'];
	$heure = $unesession['HEURE_FORMATION'];

echo "<tr>
		<td>$id</td><td>$nom</td><td>$domaine</td> <td>$adresse</td> <td>$datef</td> <td>$heure</td> <td>$place</td> <td>$limite</td> 
	</tr>";
	
}
 ?>
 </table>