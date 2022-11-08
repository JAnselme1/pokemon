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


<p> l'abbréviation de la série est : <?php echo $_GET['abbreviationSerie']; ?></p>


<form action="insertionCarteCollection.php" method="get" >
	<div style="display: block">
		<div class=container style="border: 1px solid grey;padding-left:1em;">
			<!-- élément du form : liste de sélection de la série -->
			<label for="nomSerie" style="font-weight: bold;">Référence</label>
			<select name="referenceCM">
<!--
			<option value="PGO001">PGO001 (Bulbizarre)</option>
			<option value="PGO002">PGO002 (Herbizarre)</option>
-->	
			<?php 		
			// récupérer l'abbreviationSerie sélectionné
			$sql = "Select referenceCM,nomCarteFR from carte where abbreviationSerie LIKE '" . $_GET['abbreviationSerie'] . "'ORDER BY rang ASC;";
			try{
				$stmt = $conn->query($sql);
				if($stmt === false){
					die("Erreur");	
			   }
				//récupération des données:
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					//afficher les lignes du tableau $row 
					$referenceCM = $row['referenceCM'];
					$nomCarteFR = $row['nomCarteFR'];
					echo '<option value="' . $referenceCM . '">' . $referenceCM . ' (' . $nomCarteFR . ')</option>';
					
				}
			}
			catch (PDOException $e){
				echo $e->getMessage();
			}
			?>
			</select>
		</div>
		<div style="display: block">
			<div class=container style="border: 1px solid grey;padding-left:1em;">
				<!-- élément du form : liste de sélection de la série -->
				<label for="reverse" style="font-weight: bold;">reverse</label>
				<select name="reverse">
					<option value="0">Non</option>
					<option value="1">Oui</option>
				</select>
			</div>
		</div>
	</div>
	
	<input style="background-color: palegreen" class=ecart type="submit" value="insérer">
</form>

</body>
</html>
<?php
require 'utilitaires/deconnection.php';
?>