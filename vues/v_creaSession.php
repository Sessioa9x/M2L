<h3>Création d'une Session</h3>
<table >
<form method="post" action="index.php?uc=gestionSession&action=creerSession">
<tr>	
	<td>La formation :</td>
	<td><select class="form-control" name="formation">
		<?php 
			foreach ( $lesFormations as $uneFormation) 
			{
				$id_formation = $uneFormation['NUM'];
				$nom_fomation = $uneFormation['NOM'];

				echo "<option value='".$id_formation."''>".$nom_fomation."</option>";

			}
		 ?>
	</select> 
	
	</td>
</tr>
<tr>	
	<td>Lieu de la Formation</td>
	<td><select class="form-control" name="lieu">
		<?php 
			foreach ( $lesLieux as $unLieu) 
			{
				$id_lieu = $unLieu['ID_LIEU'];
				$adresse = $unLieu['ADRESSE'];

				echo "<option value='".$id_lieu."''>".$adresse."</option>";
				
			}
		 ?>
	</select>
	 </td>
</tr>
	<tr>	
	<td>Date de la session : </td>
	<td> <input required class="form-control" id="date" type="date" name="date" value="<?=$date ?>"> </td>
</tr>
	<tr>	
	<td>Date limite d'inscription :</td>
	<td> <input required class="form-control" id="datelimite" type="date" name="datelimite" value="<?=$datelimite ?>"> </td>
</tr>
	<tr>	
	<td>Nombre de place :</td>
	<td><input required class="form-control" id="places" type="text" name="places"  value="<?=$places ?>"></td>
</tr>
	<tr>	
	<td> Heure de la foramtion :</td>
	<td><input required class="form-control" id="heuredebut" type="time" name="heuredebut"  value="<?=$heuredebut ?>"></td>
</tr>
<tr>	
	<td colspan="2"><input class="btn btn-primary" type="submit" value="Valider" name="valider"></td>
</tr>

</form>

</table>