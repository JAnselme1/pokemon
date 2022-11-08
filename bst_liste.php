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
<img src='img/bst.png' alt=fst width=170px>
<img src='img/bst logo.png' alt=fstlogo>
<div class=titre>Battle Styles <==> Styles de Combat</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<p>183 cartes (20 secrètes)</p>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 2, 5, 6, 8, 10, 16, 18, 19, 20, 21, 33, 35, 40, 42, 45, 51, 58, 65, 70, 75, 82, 83, 85,
						  88, 94, 96, 97, 99, 102, 105, 107, 108, 109, 110, 113, 114, 117, 126, 131, 134, 142, 143, 144, 145,
						  147, 148, 149, 150, 152, 153, 154, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169,
						  170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 182, 183 );
   $prix = array( 0.3, 0.3, 3.0, 1.0, 0.3, 0.7, 3.0, 4.0, 0.3, 2.0, 0.3, 0.3, 1.5, 0.3, 0.5,
		0.3, 5.0, 0.3, 0.8, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3,
		0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3,
		0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3,
		0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3,
		0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 0.3, 25.0, 42.0, 15.0, 10.0, 13.0);
   $prix2 = array( 22.0, 55.0, 22.0, 140.0, 150.0, 200.0, 150.0, 22.0, 15.0, 18.0,
					20.0, 20.0, 15.0, 17.0, 15.0, 25.0, 12.0, 10.0, 16.0, 20.0 );	
   $tabDoubles = array( );
   $i=0;$j=0;
   for($ligne=0; $ligne<30; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 183; $col++){
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
			$num = $ligne*10 + $col + 1;
			if( $ligne*10 + $col >= 163 )
				if( $num == 181 )
					echo "<b>" ;
				else
					echo "<b>" . "<span style='background-color: yellow'>";
			echo( "BST" . sprintf("%3d", $ligne*10 + $col + 1) . "</td>" );
			if( $ligne*10 + $col >= 163 ) 
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