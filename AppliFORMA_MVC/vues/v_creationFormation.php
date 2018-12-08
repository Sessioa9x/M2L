<form method="post" action="index.php?uc=gestionFormation&action=creerFormation">
	Numero de la Formation : <input id="numero" type="text" name="numero" value="<?=$numero ?>"> <br>
	Domaine de formation :
	<select name="domaine">
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
	</select> <br>

	<!-- <select></select> liste déroulante avec les domaines de le bases -->
	Nom de la formation : <input  id="nomForm"  type="text" name="nomForm" value="<?=$nom ?>"> <br>
	Contenu de la formation : <input  id="contenu" type="textarea" name="contenu" value="<?=$contenu ?>"> <br>
	Cout de la formation : <input id="cout" type="text" name="cout" value="<?=$cout ?>"> <br>
	Objectif de la formation : <input id="objectif" type="text" name="objectif"  value="<?=$objectif ?>"> <br>
	<input type="submit" value="Valider" name="valider"> <br>

</form>

