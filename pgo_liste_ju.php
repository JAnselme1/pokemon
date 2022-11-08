<?php
require 'utilitaires/connection.php';	// connection à la base de donnée

$abbrevSerie = "PGO";

require 'utilitaires/info_serie.php';	// recupération des données(nomFR,nomEN,nbCartes,nbSecrètes) d'une série (ici CEL)
require 'classes/Carte.class.php';
require 'utilitaires/tableau_Carte.php';	// récup de tous les objets Carte de la série CEL
require 'utilitaires/tableau_manquante.php';
require 'utilitaires/tableau_double.php';
require 'utilitaires/parametres.php';	// définit la taille du tableau, etc...
?>
<!DOCTYPE html>
<meta charset="UTF-8"/>
<html>
<head>
<style>
td { 
	border:1px solid black;
}
th { 
	border:1px solid black;
	background-color: grey;
}
table {
	border: 1px solid black;
	border-collapse: collapse;
}
.img1 {
	display: block;
}
.titre {
	font-size: 1.2em;
	font-weight: bolder;
}
.titre1 {
	color: red;
	padding-left: 5em;
}
#cadre {
	display: inline-block;
	border: 1px solid;
}
#cadre2 {
	display: block;
	border: 1px solid;
	background-color: orange;
	width: 40%;
}
#brstg {
	color: purple;
}
</style>
</head>
<body>
<div id=cadre>
<div class='titre titre1'>Ma liste</div>
<img src=img/cel.png alt=cel width=170px>
<img src='img/cel logo.png' alt=cellogo>
<div class=titre><?= $nomFR ?><==> <?= $nomEN ?> &nbsp;&nbsp;&nbsp;&nbsp; <cite><?= $nbCartes ?> cartes (<?= $nbSecretes ?> secrètes)</cite> </div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: #fff973'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<table>
<thead>
	<tr>
		<th colspan="10">liste de nos cartes : </th>
	</tr>
</thead>
<tbody>
<?php
$nbLignes = ceil($nbCartes/LARGEUR_TABLEAU);
echo "nbCartes: " . $nbCartes . "<br>";
echo "nbLignes: " . $nbLignes . "<br>";
echo '<table>';
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
			echo $objCarte->get_reference() . "<br>";
			if ($objCarte->get_rang() > $nbCartes - $nbSecretes){
				echo "</span>";
			}
			echo "<span style='font-size: 0.7em'>" . $objCarte->get_nomFR() . "</span>";
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