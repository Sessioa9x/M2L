<h3>Création d'une Session</h3>
<table >
<form method="post" action="index.php?uc=gestionFormation&action=creerFormation">
<tr>	
	<td>
	La formation :</td><td><select class="form-control" name="domainec">
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
	<td></td>
	<td> </td>
</tr>
	<tr>	
	<td>Contenu de la formation : </td>
	<td> <textarea required class="form-control" id="contenu" rows="3" type="textarea" name="contenu" value="<?=$contenuC ?>"></textarea> </td>
</tr>
	<tr>	
	<td>Cout de la formation :</td>
	<td> <input required class="form-control" id="cout" type="text" name="cout" value="<?=$coutC ?>"> </td>
</tr>
	<tr>	
	<td>Objectif de la formation :</td>
	<td><input required class="form-control" id="objectif" type="text" name="objectif"  value="<?=$objectifC ?>"></td>
</tr>
<tr>	
	<td colspan="2"><input class="btn btn-primary" type="submit" value="Valider" name="valider"></td>
</tr>

</form>

</table>