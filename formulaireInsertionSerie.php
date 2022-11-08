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


<p> l'idExtension choisi est : <?php echo $_GET['idExtension']; ?></p>


<form action="formulaireInsertionCarte.php" method="get" >
	<div style="display: block">
		<div class=container style="border: 1px solid grey;padding-left:1em;">
			<!-- élément du form : liste de sélection de la série -->
			<label for="nomSerie" style="font-weight: bold;">série</label>
			<select name="abbreviationSerie">
<!--
				<option value="Éclipse Cosmique">Éclipse Cosmique (CEC)</option>
				<option value="Destinées Occultes">Destinées Occultes (HIF)</option>
				
				OU 
				
				<option value="Pokémon GO">Pokémon GO(PGO)</option>
				<option value="Astres Radieux">Astres Radieux (ASR)</option>
-->	
			<?php 	
			// récupérer l'IDExtension sélectionné
			$sql = "Select nomSerieFR,abbreviationSerie from serie where idExtension =" . $_GET['idExtension'] . " ORDER BY numeroSerie DESC;";
			try{
				$stmt = $conn->query($sql);
				if($stmt === false){
					die("Erreur");	
			   }
				//récupération des données:
				while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
					//afficher les lignes du tableau $row 
					$nomSerieFR = $row['nomSerieFR'];
					$abbreviationSerie = $row['abbreviationSerie'];
					echo '<option value="' . $abbreviationSerie . '">' . $nomSerieFR . ' (' . $abbreviationSerie . ')</option>';
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