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
<img src='img/pgo.png' alt=pgo width=170px>
<img src='img/pgo logo.png' alt=pgologo>
<div class=titre>Pokémon Go <==> Pokemon Go</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 4, 12, 18, 22, 29,  
						  47, 49,   
						  71, 72, 73, 74, 75, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88 );
   $prix = array( 0.5, 2.0, 2.0, 2.0, 5.0, 0.2, 2.0, 8.0, 0.4, 0.5, 0.5,
		3.0, 3.0, 5.0, 8.0, 0.3, 0.2, 7.0, 0.3, 1.0, 0.1, 7.0, 15.0, 0.3, 0.3, 1.0, 3.0, 0.3, 0.3,
		3.0, 70.0, 8.0, 8.0, 8.0, 8.0, 45.0, 15.0, 10.0, 20.0, 30.0,
		13.0, 22.0, 7.5, 8.0, 15.0, 9.0, 10.0, 11.0, 6.5 );
   $prix2 = array( 22.0, 55.0, 22.0, 140.0, 150.0, 200.0, 150.0, 22.0, 15.0, 18.0,
					20.0, 20.0, 15.0, 17.0, 15.0, 25.0, 12.0, 10.0, 16.0, 20.0 );	
   $tabDoubles = array( 1, 2, 5, 6, 7, 8, 9, 13, 14, 15, 16, 19, 20, 21, 25, 26, 30, 32, 33,
							34, 36, 37, 38, 39, 40, 41, 42, 43, 44, 46, 52, 54, 56, 57, 59, 60,
							   61, 62, 63, 64, 65, 66, 67, 68, 69 );
   $i=0;$j=0;
   for($ligne=0; $ligne<30; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 88; $col++){
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
			echo( "PGO" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
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