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
<img src=img/asr.png alt=asr width=170px>
<img src='img/asr logo.png' alt=asrlogo>
<div class=titre>Astral Radiance <==> Astres Radieux</div>
<div>246 cartes (57 secrètes)</div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: yellow'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 1, 14, 17, 18, 28, 30,
		39, 45, 49, 50, 53, 54, 57, 62, 68, 77, 81,
		82, 84, 85, 94, 96, 97, 98, 99, 100, 101, 102, 114, 117,  
		126, 130, 133, 134, 135, 
		160, 161, 162, 163, 164, 165, 166, 167, 168, 169,
		170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 
		184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 198, 199, 200, 201,
		202, 203, 204, 205, 206, 207, 209, 210, 211, 212, 213, 214, 215, 216 );

   $tabDoubles = array( 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 19, 20, 21, 24, 28, 29, 31, 32, 34,
        35, 37, 41, 42, 43, 44, 52, 55, 56, 58, 59, 60, 61, 63, 64, 65, 69, 70, 72, 74, 76, 80, 83, 85, 88, 89, 90, 92, 95,
		104, 105, 111, 112, 115, 116, 119, 120, 121, 122, 124, 127, 129, 131, 138, 139, 140, 143, 144, 145, 149,
		150, 152, 155, 156, 157, 159 );

   for($ligne=0; $ligne<25; $ligne++){
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
				if( $ligne*10 + $col >= 189 ) 
					echo "<b>";
				echo( "ASR" . sprintf("%03d", $ligne*10 + $col + 1) . "</td>" );
				if( $ligne*10 + $col >= 189 ) 
					echo "</b>";
		}
	    echo("</tr>");
	}
?>
</table>
</div>
<p> Nb manquantes: <?php echo count($tabManquantes);?> &nbsp;Nb doubles: <?php echo count($tabDoubles); ?></p>

<div style="overflow-x:auto;">
<table id=brstg>
<?php
   $tabManquantes2 = array( 1, 2, 4, 6, 
		7, 11, 12, 13, 14, 15, 17, 18, 19, 
		20, 22, 23, 24, 25, 26, 28, 29, 30 );
   $tabDoubles2 = array( 9 );

   for($ligne=0; $ligne<5; $ligne++){
        echo("<tr>");
		for($col=0; $col<6 && $ligne*6 + $col <= 30; $col++){
			if( $ligne == 0 && in_array($ligne*6 + $col + 1, $tabManquantes2) )
					echo( "<td style='background-color: yellow'><b>" );
			else if( $ligne > 0 && in_array( $ligne*6 + $col + 1, $tabManquantes2) )
					echo( "<td style='background-color: yellow'><b>" );
			else if( $ligne == 0 && in_array($ligne*6 + $col + 1, $tabDoubles2) )
					echo( "<td style='background-color: palegreen'><b>" );
			else if( $ligne > 0 && in_array( $ligne*6 + $col + 1, $tabDoubles2) )
					echo( "<td style='background-color: palegreen'><b>" );
			else
				echo("<td><b>");
			/*if( $ligne == 0 )*/
				echo( "ASR TG" . sprintf("%03d", $ligne*6 + $col + 1) . "</b></td>" );
			/*else
				echo( "ASR TG" . sprintf("%03d", $ligne*6 + $col) . "</td>" );*/
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

</table>
</div>
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
?>
