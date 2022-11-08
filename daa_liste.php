<!DOCTYPE html>
<html>
<head>
<style>
td { 
	border:1px solid black;
}
/*
span {
	display: block;
	width: 100%;
	height: 100%;
}
*/
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
<img src=img/daa.png alt=brs width=170px>
<img src='img/daa logo.png' alt=brslogo>
<div class=titre>Darkness Ablaze <==> Ténèbres Embrasées</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<p>201 cartes (12 secrètes)</p>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 1, 4, 5, 8, 10, 13, 15, 17, 18, 19, 20, 24, 25, 27, 28, 29,
		30, 31, 32, 34, 35, 36, 37, 38, 39, 40, 42, 44, 45, 48, 49, 51, 53, 54, 56, 57, 59, 60, 62, 63, 
		64, 65, 66, 68, 69, 72, 73, 75, 77, 78, 80, 82, 85, 88, 89, 90, 91, 94, 95, 97, 98, 99, 101, 105,
		106, 107, 109, 110, 113, 114, 115, 116, 117, 118, 119, 120, 121, 123, 127, 128, 130, 132, 133, 134, 
		135, 136, 142, 143, 144, 145, 146, 147, 148, 149, 151, 156, 157, 158, 159, 160, 162, 164, 165, 166,
		170, 172, 173, 174, 175, 176, 177, 178, 179, 180, 182, 183, 184, 185, 186, 187, 188, 189, 190, 195,
		196, 197, 198, 199, 200, 201);

   $tabDoubles = array( );

   for($ligne=0; $ligne<22; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 201; $col++){
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
				if( $ligne*10 + $col >= 189 ) 
					echo "<b>";
				echo( "DAA" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
				if( $ligne*10 + $col >= 189 ) 
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