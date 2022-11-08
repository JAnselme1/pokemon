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
<img src='img/cre.png' alt=cre width=170px>
<img src='img/cre logo.png' alt=crelogo>
<div class=titre>Chilling Reign <==> Règne de Glace</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<p>233 cartes (35 secrètes)</p>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 3, 7, 8, 10, 12, 13, 14, 18, 19, 20, 21, 22, 25, 27, 28, 31, 33, 36, 38, 40, 42, 43,
						  44, 45, 46, 47, 52, 53, 56, 57, 58, 59, 61, 63, 64, 66, 68, 70, 73, 74, 75, 77, 79, 
						  80, 81, 82, 83, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 103, 104, 
						  106, 107, 108, 111, 112, 113, 114, 115, 118, 121, 123, 124, 125, 127, 128, 129, 132,
						  135, 138, 139, 140, 141, 142, 147, 148, 149, 151, 152, 153, 157, 158, 160, 161, 162, 
						  163, 164, 165, 166, 167, 168, 169, 170, 172, 173, 174, 175, 176, 177, 178, 179,
						  180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196,
						  197, 198, 199, 200, 201, 203, 205, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219,
						  220, 221, 222, 223, 225, 226, 227, 228, 229, 230, 231, 232, 233);
   $prix = array( 0.5, 2.0, 2.0, 2.0, 5.0, 0.2, 2.0, 8.0, 0.4, 0.5, 0.5,
		3.0, 3.0, 5.0, 8.0, 0.3, 0.2, 7.0, 0.3, 1.0, 0.1, 7.0, 15.0, 0.3, 0.3, 1.0, 3.0, 0.3, 0.3,
		3.0, 70.0, 8.0, 8.0, 8.0, 8.0, 45.0, 15.0, 10.0, 20.0, 30.0,
		13.0, 22.0, 7.5, 8.0, 15.0, 9.0, 10.0, 11.0, 6.5 );
   $prix2 = array( 22.0, 55.0, 22.0, 140.0, 150.0, 200.0, 150.0, 22.0, 15.0, 18.0,
					20.0, 20.0, 15.0, 17.0, 15.0, 25.0, 12.0, 10.0, 16.0, 20.0 );	
   $tabDoubles = array( );
   $i=0;$j=0;
   for($ligne=0; $ligne<30; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 233; $col++){
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
			$num = $ligne*10 + $col + 1;
			if( $ligne*10 + $col >= 198 )
				if( $num == 200 )
					echo "<b>" ;
				else
					echo "<b>" . "<span style='background-color: yellow'>";
			echo( "FST" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
			if( $ligne*10 + $col >= 198 ) 
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