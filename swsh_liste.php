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
<img src=img/swsh.png alt=swsh width=170px>
<img src='img/swsh logo.png' alt=swshlogo>
<div class=titre>Promos Sword&Shield <==> Promos Épée et Bouclier</div>
<div>238 cartes (0 secrètes)</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td><td style='background-color: black;color: white;'>n'existe pas</td></tr>
</table>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
	// la 153 n'EXISTE PAS, la 229 IDEM, 
	// bond 239 ==> 248, 249 (n'EXISTE PAS: 240 à 247 incluses)
   $tabNexistePas = array(  153, 229, 240, 241, 242, 243, 244, 245, 246, 247 );
   
   $tabManquantes = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 
						  20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39,
						  40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 
						  60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 
						  80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99,
						  100, 101, 102, 103, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119,
						  120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 134, 135, 139, 
						  140, 141, 142, 143, 145, 146, 147, 149, 150, 151, 152, 154, 155, 156, 157, 158, 159,
						  160, 161, 162, 163, 164, 165, 166, 168, 169, 170, 171, 172, 173, 174, 177, 178, 179,
						  180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 199,
						  200, 201, 205, 206, 207, 208, 209, 210,
						  223, 224, 225, 226, 227, 228, 230, 231, 232, 233, 234, 235, 236, 238, 239 );

   $tabDoubles = array(  );

   for($ligne=0; $ligne<30; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 249; $col++){
			if( $ligne == 0 && in_array($ligne*10 + $col + 1, $tabManquantes) )
					echo( "<td style='background-color: yellow'>" );
			else if( $ligne > 0 && in_array( $ligne*10 + $col + 1, $tabManquantes) )
					echo( "<td style='background-color: yellow'>" );
			else if( $ligne == 0 && in_array($ligne*10 + $col + 1, $tabDoubles) )
					echo( "<td style='background-color: palegreen'>" );
			else if( $ligne > 0 && in_array( $ligne*10 + $col + 1, $tabDoubles) )
					echo( "<td style='background-color: palegreen'>" );
			else if( $ligne > 0 && in_array( $ligne*10 + $col + 1, $tabNexistePas) )
					echo( "<td style='background-color: black;color: white;'>" );
			else if( $ligne > 0 && in_array( $ligne*10 + $col + 1, $tabNexistePas) )
					echo( "<td style='background-color: black;color: white;'>" );
			else
				echo("<td>");
			echo( "SWSH" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
		}
	    echo("</tr>");
	}
?>
</table>
</div>
<p> Nb manquantes: <?php echo count($tabManquantes);?> &nbsp;Nb doubles: <?php echo count($tabDoubles); ?></p>


</body>
</html>
<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokemonju";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("UPDATE `manquantes` SET `manquantesTotal` = :manquantesTotal,
		`manquantesTab1` = :manquantesTab1, `manquantesTab2` = :manquantesTab2 WHERE idSerie = 13");
  $stmt->bindParam(':manquantesTotal', $manquantesTotal);
  $stmt->bindParam(':manquantesTab1', $manquantesTab1);
  $stmt->bindParam(':manquantesTab2', $manquantesTab2);

  // insert a row
  $manquantesTab1 = count($tabManquantes);
  $manquantesTab2 = count($tabManquantes2);
  $stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
*/
?>
