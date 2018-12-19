<h3>Création d'une Formation</h3>
<table >
<form method="post" action="index.php?uc=gestionFormation&action=creerFormation">
<tr>	
	<td>
	Domaine de formation :</td><td>
	<select class="form-control" name="domainec">
		<?php 
			foreach ( $lesDomaines as $unDomaine) 
			{
				$id_domaine = $unDomaine['ID_DOMAINE'];
				$nom_domaine = $unDomaine['DOMAINE'];

				echo "<option value='".$id_domaine."''>".$nom_domaine."</option>";
				echo $id_domaine; 
				echo $nom_domaine;
			}
		 ?>
	</select> 
	</td>
</tr>
<tr>	
	<td>Nom de la formation : </td>
	<td><input required class="form-control"  id="nomForm"  type="text" name="nomForm" value="<?=$nomC ?>"> </td>
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
<br>
<?php 
$num = 1.9;
echo $num . "<br>";
$num += 0.1;
echo $num;
 ?>