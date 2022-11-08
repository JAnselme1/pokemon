<?php
require 'utilitaires/connection.php';	// connection à la base de données
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insertion carte</title>
<style>
.container {
    display: inline-block;
    border: 20px solid #000;
}
.ecart {
	margin-top: 1em;
	padding-top: 0.5em
}
</style>
</head>
<body>

<h3>Formulaire d'entrée d'une carte dans la collection <br>
dans la base de donnée O2Switch anth1732_pokemon </h3>

<form action="formulaireInsertionSerie.php" method="get" >
	<div style="display: block">
		<div class=container style="border: 1px solid grey;padding-left:1em;">
		
			<!-- 1er élément du form : liste de sélection de l'extension -->
			<label for="nomExtension" style="font-weight: bold;">extension</label>
			<select name="idExtension">
<!--
				<option value="Épée et Bouclier">Épée et Bouclier (SWSH)</option>
				<option value="Soleil & Lune">Soleil & Lune (S&M)</option>
-->
			<?php 		
			$sql = "Select nomExtensionFR,abbreviationExtension,idExtension from extension ORDER BY `extension`.`idExtension` DESC;";
			try{
				$stmt = $conn->query($sql);
				if($stmt === false){
					die("Erreur");	
			   }
				//récupération des données:
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					//afficher les lignes du tableau $row 
					$nomExtensionFR = $row['nomExtensionFR'];
					$abbrevSerie = $row['abbreviationExtension'];
					$idExtension = $row['idExtension'];
					echo '<option value="' . $idExtension . '">' . $nomExtensionFR . ' (' . $abbrevSerie . ')</option>';
				}
			}
			catch (PDOException $e){
				echo $e->getMessage();
			}
			?>
			</select>
		</div>
	</div>
	<input style="background-color: palegreen" class=ecart type="submit" value="insérer">
</form>

</body>
</html>
<?php
require 'utilitaires/deconnection.php';
?>