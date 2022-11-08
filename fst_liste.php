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
<img src='img/fst.png' alt=fst width=170px>
<img src='img/fst logo.png' alt=fstlogo>
<div class=titre>Fusion Strike <==> Poing de Fusion</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 3, 6, 21, 39, 40, 41, 44, 45, 54, 59, 66,
		76, 78, 86, 104, 107, 110, 113, 120, 124, 148, 156, 157, 169, 184, 190, 201, 214, 216,
		217, 245, 246, 247, 248, 249, 250, 252, 253, 254, 255,
		256, 257, 258, 259, 260, 261, 262, 263, 264 );
   $prix = array( 0.5, 2.0, 2.0, 2.0, 5.0, 0.2, 2.0, 8.0, 0.4, 0.5, 0.5,
		3.0, 3.0, 5.0, 8.0, 0.3, 0.2, 7.0, 0.3, 1.0, 0.1, 7.0, 15.0, 0.3, 0.3, 1.0, 3.0, 0.3, 0.3,
		3.0, 70.0, 8.0, 8.0, 8.0, 8.0, 45.0, 15.0, 10.0, 20.0, 30.0,
		13.0, 22.0, 7.5, 8.0, 15.0, 9.0, 10.0, 11.0, 6.5 );
   $prix2 = array( 22.0, 55.0, 22.0, 140.0, 150.0, 200.0, 150.0, 22.0, 15.0, 18.0,
					20.0, 20.0, 15.0, 17.0, 15.0, 25.0, 12.0, 10.0, 16.0, 20.0 );	
   $tabDoubles = array( 1, 2, 4, 5, 7, 8, 9, 10, 11, 12, 13, 14, 16, 18, 19, 24, 25, 28, 31, 32, 34, 
        35, 36, 37, 38, 42, 46, 47, 48, 49, 50, 52, 54, 55, 56, 58, 60, 61, 62, 63, 65, 67, 68, 69, 70, 71, 72, 74, 75,
		77, 80, 81, 82, 83, 84, 85, 87, 88, 89, 90, 91, 93, 95, 96, 98, 99, 100, 101, 103, 106, 108, 109, 111, 112, 115, 116, 117, 119, 121,
		123, 125, 127, 128, 129, 131, 132, 133, 134, 135, 136, 137, 138, 140, 141, 142, 143, 144, 145, 147, 149,
		150, 151, 152, 154, 155, 159, 160, 161, 162, 164, 165, 167, 168, 170, 172, 173, 176, 177, 178, 179, 180, 181, 182, 
		183, 185, 186, 188, 189, 191, 194, 195, 196, 199, 200, 202, 203, 204, 205, 206, 207, 208, 209, 210, 212, 214, 215, 
		219, 220, 221, 222, 223, 225, 226, 227, 228, 229, 230, 231, 233, 234, 235, 236, 237, 238, 240, 241, 243, 244);
   $i=0;$j=0;
   for($ligne=0; $ligne<30; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 284; $col++){
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
// ZZZ il faudra faire de la dentelle quand j'aurai une de ces cartes !!!
			if( $ligne*10 + $col >= 264 ) 
				echo "<b>" . "<span style='background-color: yellow'>";
			echo( "FST" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
			if( $ligne*10 + $col >= 264 ) 
				echo "</span></b>";
		}
	    echo("</tr>");
	}
?>
</table>
</div>
<p> Nb manquantes: <?php echo count($tabManquantes);?> &nbsp;Nb doubles: <?php echo count($tabDoubles); ?></p>



</body>
</html>