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
<img src='img/ssh.png' alt=fst width=170px>
<img src='img/ssh logo.png' alt=fstlogo>
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
   $tabManquantes = array( 4, 8, 13, 14, 19, 21, 36, 41, 48, 50, 55, 58, 61, 62, 64, 69,
		75, 79, 80, 85, 86, 88, 90, 91, 99, 103, 106, 109, 110, 113, 115, 116, 119, 120, 124, 126, 135,
		137, 141, 144, 162, 169, 173, 184, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201,
		202, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216 );
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
		for($col=0; $col<10 && $ligne*10 + $col < 216; $col++){
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
			if( $ligne*10 + $col >= 202 )
				if( $num == 203 || $num == 204 )
					echo "<b>" ;
				else
					echo "<b>" . "<span style='background-color: yellow'>";
			echo( "FST" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
			if( $ligne*10 + $col >= 202 ) 
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