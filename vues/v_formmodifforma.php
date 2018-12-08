<h3>Modification de la formation</h3>
<table>
<form method="post" action="index.php?uc=gestionFormation&formationp=<?=$numformation ?>&domaine=<?=$domaine ?>&nom=<?=$nom ?>&contenu=<?=$contenu ?>&cout=<?=$cout ?>&objectif=<?=$objectif ?>&action=modifierFormation">
	
	<tr>
		<td>Domaine de formation :</td><td><select name="domaine" class="form-control">
		<?php 
			foreach ( $lesDomaines as $unDomaine) 
			{
				$id_domaine = $unDomaine['ID_DOMAINE'];
				$nom_domaine = $unDomaine['DOMAINE'];

				echo "<option "; 
				if ($id_domaine == $domaine) 
				{
					echo "selected";
				}
				echo " value='".$id_domaine."''>".$nom_domaine."</option>";

			}
		 ?>
	</select></td>
	</tr>
	<tr>
		<td>Nom de la formation : </td><td><input class="form-control"  id="nom"  type="text" name="nom" value="<?=$nom ?>"></td>
	</tr>
	<tr>
		<td>Contenu de la formation : </td><td><textarea class="form-control" id="contenu" rows="3" type="textarea" name="contenu"> <?=$contenu ?></textarea></td>
	</tr>
	<tr>
		<td>Cout de la formation : : </td><td><input class="form-control" id="cout" type="text" name="cout" value="<?=$cout ?>"></td>
	</tr>
	<tr>
		<td>Objectif de la formation : </td><td><input class="form-control" id="objectif" type="text" name="objectif"  value="<?=$objectif ?>"></td>
	</tr>
	<tr>
		<td><input class="btn btn-primary" type="submit" value="Valider" name="valider"></td><td></td>
	</tr>
	
	 

	
	

</form>
</table>