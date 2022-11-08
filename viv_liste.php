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
<img src='img/viv.png' alt=fst width=170px>
<img src='img/viv logo.png' alt=fstlogo>
<div class=titre>Fusion Strike <==> Poing de Fusion</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<p>216 cartes (14 secrètes)</p>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 3, 4, 5, 6, 7, 9, 11, 12, 13, 14, 15, 16, 17, 18, 20, 25, 26, 27, 
						  28, 29, 30, 32, 34, 35, 37, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51,
						  53, 54, 58, 60, 61, 62, 66, 68, 71, 72, 74, 76, 78, 79, 81, 82, 83, 86, 91, 92, 93,
						  95, 99, 101, 102, 106, 109, 111, 113, 115, 117, 119, 120, 121, 122, 126, 127, 128,
						  129, 132, 137, 138, 140, 142, 145, 146, 147, 148, 150, 152, 153, 154, 157, 158, 160,
						  161, 163, 164, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179,
						  180, 181, 182, 183, 184, 185, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201,
						  202, 203 );
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
		for($col=0; $col<10 && $ligne*10 + $col < 203; $col++){
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
			if( $ligne*10 + $col >= 186 )
				if( $num == 200 )
					echo "<b>" ;
				else
					echo "<b>" . "<span style='background-color: yellow'>";
			echo( "FST" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
			if( $ligne*10 + $col >= 186 ) 
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