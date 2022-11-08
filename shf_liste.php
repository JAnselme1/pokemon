<!DOCTYPE html>
<html>
<head>
<style>
td { 
	border:1px solid black;
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
#brstg {
	color: purple;
}
</style>
</head>
<body>
<div id=cadre>
<div class='titre titre1'>Ma liste</div>
<img src='img/shf.png' alt=shf width=170px>
<img src='img/shf logo.png' alt=shflogo>
<div class=titre>Shining Fates <==> Destinées Radieuses  195 cartes (123 secrètes)</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 2, 3, 5,6,7,8,9,10,11,12,13,16,17,18,19,21,22,23,24,25,26,27,28,
							30,31,32,33,35,37,38,39,42,43,44,45,46,48,50,51,53,54,55,56,57,61,
							64,65,66,67,68,69,70,71,72);
   $tabDoubles = array( 58, 59, 60 );
   for($ligne=0; $ligne<30; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 73; $col++){
			if( $ligne == 0 && in_array($ligne*10 + $col + 1, $tabManquantes) )
					echo( "<td style='background-color: yellow'>" );
			else if( $ligne > 0 && in_array( $ligne*10 + $col + 1, $tabManquantes) )
					echo( "<td style='background-color: yellow'>" );
			else if( $ligne == 0 && in_array($ligne*10 + $col + 1, $tabDoubles) )
					echo( "<td style='background-color: palegreen'>" );
			else if( $ligne > 0 && in_array( $ligne*10 + $col + 1, $tabDoubles) )
					echo( "<td style='background-color: palegreen'>" );
			else
				echo("<td>");
			if( $ligne*10 + $col >= 72 ) 
				echo "<b>";
			echo( "SHF" . sprintf("%d", $ligne*10 + $col + 1) . "</td>" );
			if( $ligne*10 + $col >= 72 ) 
				echo "</b>";
		}
	    echo("</tr>");
	}
?>
</table>
</div>
<p> Nb manquantes: <?php echo count($tabManquantes);?> &nbsp;Nb doubles: <?php echo count($tabDoubles); ?></p>

<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes2 = array( 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,
							26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,
							48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,
							71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,
							91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,
							110,111,112,113,114,115,116,117,118,119,120,121,122,123);
   $tabDoubles2 = array( );
   for($ligne=0; $ligne<30; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 123; $col++){
			if( $ligne == 0 && in_array($ligne*10 + $col + 1, $tabManquantes2) )
					echo( "<td style='background-color: yellow'><b>" );
			else if( $ligne > 0 && in_array( $ligne*10 + $col + 1, $tabManquantes2) )
					echo( "<td style='background-color: yellow'><b>" );
			else if( $ligne == 0 && in_array($ligne*10 + $col + 1, $tabDoubles2) )
					echo( "<td style='background-color: palegreen'><b>" );
			else if( $ligne > 0 && in_array( $ligne*10 + $col + 1, $tabDoubles2) )
					echo( "<td style='background-color: palegreen'><b>" );
			else
				echo("<td><b>");
			echo( "SHF SV" . sprintf("%d", $ligne*10 + $col + 1) . "</b></td>" );
		}
	    echo("</tr>");
	}
?>
</table>
</div>

<p> Nb manquantes: <?php echo count($tabManquantes2);?> &nbsp;Nb doubles: <?php echo count($tabDoubles2); ?></p>
<p> TOTAL Nb manquantes: <?php echo (count($tabManquantes) + count($tabManquantes2));?> &nbsp;Nb doubles: <?php echo (count($tabDoubles)+count($tabDoubles2));?></p>


</body>
</html>