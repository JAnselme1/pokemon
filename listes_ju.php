<?php
require 'utilitaires/connection.php';	// connection à la base de données
if (isset($_GET['abbrevSerie'])){
	$abbrevSerie = $_GET['abbrevSerie'];
}
else {
	header('Location: index.php');
	exit();
}

//$abbrevSerie = "ASR"; // variable utilisée dans les fichiers php en-dessous

require 'utilitaires/info_serie.php';	// recupération des données(nomFR,nomEN,nbCartes,nbSecrètes) d'une série (ici CEL)
require 'classes/Carte.class.php';
require 'utilitaires/tableau_Carte.php';	// récup de tous les objets Carte de la série CEL
require 'utilitaires/tableau_manquante.php';
require 'utilitaires/tableau_double.php';
require 'utilitaires/tableau_reverse_collection.php';
require 'utilitaires/tableau_reverse_doubles.php';
require 'utilitaires/parametres.php';	// définit la taille du tableau, etc...
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=0.3">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="css/styles_listes.css">
</head>
<body>
<div id=cadre>
<div class='titre titre1'>Ma liste</div>
<img src='img/series/epee_et_bouclier/<?php echo $abbrevSerie?>.png' alt=<?php echo $abbrevSerie?> width=170px>
<img src='img/series/epee_et_bouclier/<?php echo $abbrevSerie . " "?>logo.png' alt=cellogo>
<div class=titre><img src='img/france.jpg' alt=france width=30em><span class=titre2><?= $nomFR ?></span> <==> <img src='img/usa.jpg' alt=usa width=28em>
	<span class=titre3><?= $nomEN ?></span> &nbsp;&nbsp;&nbsp;&nbsp; <cite><?= $nbCartes ?> cartes (<?= $nbSecretes ?> secrètes)</cite><br></div>
</div>
<table id=tableLegende>
	<tr>
		<td><?php echo "manquantes: ";?></td>
		<td>total: <?php echo $nbManquantesTotal;?></td>
		<td>normales: <?php echo $nbManquantesTotal - $nbSecretesManquantes;?></td>
		<td>secrètes: <?php echo $nbSecretesManquantes;?></td>
	</tr>
</table>
<!-- <p>il faut afficher: nbFull-Art;Radieux;Rainbow;Gold dans chaque série</p> -->
<a href="index.php"><img src='img/retour.jpg' alt=retour width=50em></a><table id=tableLegende>
	<tr>
		<td colspan=2 class="legende" style="font-size:0.9em">liste de nos cartes : </td> 
		<td style='background-color: black;color: white;'>légende :</td><td style='background-color: #fff973'>manquantes</td>
		<td style='background-color: palegreen'>doubles</td>
			<td><img style='float: right;padding-right: 0.5em' src='./img/logo_reverse.png'>Reverse<br>(Collection)</td>
			<td style='background-color: palegreen'>Reverse<br>(Doubles): <span style='color: RoyalBlue;font-weight: bold'>R</span></td></tr> </td>
	</tr>
</thead>
<tbody>
<?php
$nbLignes = ceil($nbCartes/LARGEUR_TABLEAU);
//echo "nbCartes: " . $nbCartes . "<br>";
//echo "nbLignes: " . $nbLignes . "<br>";
echo '<table style="width: 100%">';
// erreurs possible itération tableau : LARGEUR_TABLEAU = 6, $nbLignes = 9	LARGEUR_TABLEAU * $i + $j = 54;
for ($i=0; $i<$nbLignes; $i++) {
	echo '<tr>';
	for ($j=0; $j<LARGEUR_TABLEAU; $j++) {
		//echo "tour n°:" . (LARGEUR_TABLEAU * $i + $j) . "<br>"; 
		if (LARGEUR_TABLEAU * $i + $j < $nbCartes ) {
			$objCarte = $tabObjetsCarte[LARGEUR_TABLEAU * $i + $j];
			echo '<td ';
			if (in_array($objCarte->get_rang(), $tabRangCartesManquantes)){
				echo "style='background-color: #fff973'";
			}
			if (in_array($objCarte->get_rang(), $tabRangCartesDoubles)){
				echo "style='background-color: palegreen'";
			}
			echo ">";
			if ($objCarte->get_rang() > $nbCartes - $nbSecretes){
				echo "<span style='font-weight: bold'>";
			}
			echo $objCarte->get_reference();
			if (in_array($objCarte->get_rang(), $tabRangCartesReverseCollection)){
				echo "<img style='float: right;padding-right: 0.5em' src='./img/logo_reverse.png'>";
			}
			echo "<br>";
			if ($objCarte->get_rang() > $nbCartes - $nbSecretes){
				echo "</span>";
			}
			echo "<span style='font-size: 0.7em'>" . $objCarte->get_nomFR() . "</span>";
			if (in_array($objCarte->get_rang(), $tabRangCartesReverseDoubles)){
				echo "<span class=R>R</span>";
			}
			
			echo '</td> ';
			echo "\n";
		}
   }
   echo '</tr>';
}
echo '</table>';
?>
</tbody>
<br>
</body>
</html>
<?php
require 'utilitaires/deconnection.php';
?>