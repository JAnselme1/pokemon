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
	padding-left: 0.5em;
}
#brstg {
	color: purple;
}
</style>
</head>
<body>
<div id=cadre>
<div class='titre titre1'>Ma liste</div>
<img src=img/brs.png alt=brs width=170px>
<img src='img/brs logo.png' alt=brslogo>
<div class=titre>Brilliant Stars <==> Etoiles étincelantes</div>
<div>216 cartes (44 secrètes)</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabAchatEnCours = array( );
   $tabManquantes = array( 10, 13, 14, 16, 17, 18, 21, 22, 26, 27, 29,
		31, 40, 43, 45, 47, 48, 57, 64, 68, 69, 71, 77, 79, 82, 88,
		95, 96, 97, 98, 99, 100, 101, 104, 105, 106, 109, 119, 
		123, 125, 126, 128, 132, 137, 140, 149, 152, 153, 154, 155,
		156, 157, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169,
		170, 171, 173, 175, 176, 177, 178, 179, 180, 181, 182, 183, 
		184, 185, 186);
   $tabDoubles = array( 1, 2, 3, 5, 6, 8, 9, 11, 12, 15, 19, 20, 30, 33, 34, 35,
        38, 39, 42, 46, 49, 50, 53, 59, 60, 61, 63, 66, 67, 70, 72, 73, 74, 75,
		76, 78, 80, 81, 84, 86, 87, 89, 90, 92, 107, 115, 117, 118, 120, 127,
		129, 131, 133, 135, 142, 144, 146, 148, 150, 151);

   for($ligne=0; $ligne<22; $ligne++){
        echo("<tr>");
		for($col=0; $col<10 && $ligne*10 + $col < 186; $col++){
			if( $ligne >= 0 && in_array($ligne*10 + $col + 1, $tabAchatEnCours) )
					echo( "<td style='background-color: orange'>" );
			else if( $ligne >= 0 && in_array($ligne*10 + $col + 1, $tabManquantes) )
					echo( "<td style='background-color: yellow'>" );
			else if( $ligne >= 0 && in_array($ligne*10 + $col + 1, $tabDoubles) )
					echo( "<td style='background-color: palegreen'>" );
			else
				echo("<td>");
			if( $ligne*10 + $col + 1 >= 173 ) 
				echo "<b>";
			echo( "BRS" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
			if( $ligne*10 + $col + 1 >= 173 ) 
				echo "</b>";
			echo( "</td>" );
		}
	    echo("</tr>");
	}
?>
</table>
</div>
<p> Nb manquantes: <?php echo count($tabManquantes); ?></p>
<div style="overflow-x:auto;">
<table id=brstg>
<?php
   $tabAchatEnCours2 = array( );
   $tabManquantes2 = array( 3, 5, 
		7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 
		21, 23, 25, 27, 28, 29, 30 );
   $tabDoubles2 = array( );

   for($ligne=0; $ligne<5; $ligne++){
        echo("<tr>");
		for($col=0; $col<6 && $ligne*6 + $col <= 30; $col++){
			if( $ligne >= 0 && in_array($ligne*6 + $col + 1, $tabAchatEnCours2) )
					echo( "<td style='background-color: orange'>" );
			else if( $ligne >= 0 && in_array($ligne*6 + $col + 1, $tabManquantes2) )
					echo( "<td style='background-color: yellow'>" );
			else if( $ligne >= 0 && in_array($ligne*6 + $col + 1, $tabDoubles2) )
					echo( "<td style='background-color: palegreen'>" );
			else
				echo("<td>");
			echo( "<b>BRS TG" . sprintf("%03d", $ligne*6 + $col + 1) . "</b></td>" );
		}
	    echo("</tr>");
	}
?>
</table>
</div>
<?php $manquantesTotal = count($tabManquantes) + count($tabManquantes2) ;?>
<?php $doubleTotal = count($tabDoubles) + count ($tabDoubles2) ;?>
<p> Nb manquantes: <?php echo count($tabManquantes2);?> &nbsp;Nb doubles: <?php echo count($tabDoubles2); ?></p>
<p> Nb manquantes au total: <?php echo $manquantesTotal ;?> &nbsp;Nb doubles au total: <?php echo $doubleTotal ; ?></p>

</body>
</html>
<?php
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
		`manquantesTab1` = :manquantesTab1, `manquantesTab2` = :manquantesTab2 WHERE idSerie = 12");
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
?>
