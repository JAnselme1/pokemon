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
<img src='img/evs.png' alt=evs width=170px>
<img src='img/evs logo.png' alt=evslogo>
<div class=titre>Evolving Skies <==> Évolution Céleste  237 cartes (34 secrètes 204/203)</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 4, 6, 7, 8, 10, 13, 14, 16, 18, 19, 21, 23, 28, 29, 30, 31, 34, 
						38, 40, 41, 48, 50, 58, 59, 60, 62, 64, 66, 70, 73, 74, 75, 79, 83,
						86, 88, 91, 92, 93, 94, 95, 101, 103, 104, 109, 110, 116, 117, 119, 122, 
						123, 127, 128, 131, 147, 150, 158, 165, 166, 167, 168, 169, 171, 172, 173,
						174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 
						190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203,
						204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217,
						218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, 230, 231,
						232, 233, 234, 235, 236, 237);
   $tabDoubles = array( 2, 5, 9, 11, 12, 22, 24, 25, 26, 27, 32, 35, 37, 42, 44, 45, 47, 49, 
						52, 54, 56, 57, 61, 68, 71, 76, 78, 81, 85, 87, 89, 90, 96, 98, 102,
						105, 107, 108, 112, 113, 114, 125, 126, 129, 133, 138, 141, 143, 145,
						146, 149, 154, 156, 160, 162, 164);
   for($ligne=0; $ligne<30; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 237; $col++){
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
			if( $ligne*10 + $col >= 203 ) 
				echo "<b>";
			echo( "EVS" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
			if( $ligne*10 + $col >= 203 ) 
				echo "</b>";
		}
	    echo("</tr>");
	}
?>
</table>
</div>
<p> Nb manquantes: <?php echo count($tabManquantes);?> &nbsp;Nb doubles: <?php echo count($tabDoubles); ?></p>


</body>
</html>