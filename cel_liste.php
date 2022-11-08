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
#cadre2 {
	display: block;
	border: 1px solid;
	background-color: orange;
	width: 40%;
}
#brstg {
	color: purple;
}
</style>
</head>
<body>
<div id=cadre>
<div class='titre titre1'>Ma liste</div>
<img src=img/cel.png alt=cel width=170px>
<img src='img/cel logo.png' alt=cellogo>
<div class=titre>Celebrations <==> Célébrations &nbsp;&nbsp;&nbsp;&nbsp; <cite>50 cartes (25 secrètes)</cite></div>
</div>
<table>
<tr style='font-weight: bold'><td style='background-color: black;color: white'>légende :</td><td style='background-color: #fff973'>manquantes</td>
<td style='background-color: palegreen'>doubles</td></tr>
</table>
<div style="overflow-x:auto;">
<table id=maTable>
<?php
   $tabManquantes = array( 26, 27, 29,
		31, 40, 43, 45, 47, 48, 57, 64, 68, 69, 71, 77, 79, 88,
		95, 96, 97, 98, 101, 105, 106, 109, 119, 122, 
		123, 126, 132, 137, 152, 153, 155,
		156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169,
		170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 
		185, 186);

   $tabDoubles = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
						16, 17, 18, 19, 20, 21, 22, 23,  );

   for($ligne=0; $ligne<5; $ligne++){
        echo("<tr>");
		for($col=0; $col<6 && $ligne*6 + $col + 1 < 26; $col++){
			if( $ligne == 0 && in_array($ligne*6 + $col + 1, $tabManquantes) )
					echo( "<td style='background-color: #fff973'>" );
			else if( $ligne > 0 && in_array( $ligne*6 + $col + 1, $tabManquantes) )
					echo( "<td style='background-color: #fff973'>" );
			else if( $ligne == 0 && in_array($ligne*6 + $col + 1, $tabDoubles) )
					echo( "<td style='background-color: palegreen'>" );
			else if( $ligne > 0 && in_array( $ligne*6 + $col + 1, $tabDoubles) )
					echo( "<td style='background-color: palegreen'>" );
			else
				echo("<td>");
				echo( "CEL" . sprintf("%03d", $ligne*6 + $col + 1) . "</td>" );
		}
	    echo("</tr>");
	}
?>
</table>
</div>
<p> Nb manquantes:  --- &nbsp;&nbsp;&nbsp;&nbsp;Nb doubles: <?php echo count($tabDoubles); ?></p>
<?php //*******************************************************************
/*                             35,60 €
	CEL TRR 86 	Mystic-Ambre	1,20 €															tinhead		1,90 €
	CEL TR 15					1,20 €																		1,90 €
	CEL BS 73					1,20 €													1,00				1,90 €
	CEL ROS 76					28,00 €		ObscuriityKards		30,00 €		Apso37		35,00				40,00
	CEL GC 15					4,00 €																		 4,00
												CEL LM 88		19,00					15,00				14,90 €
												CEL WP 24		13,90 €
	CEL DF 93                           
	CEL RR 109
	CEL BLW 114
*/
?>
<div style="overflow-x:auto;">
<table id=celbs>
<?php
   echo("<tr>");
		//echo( "<td style='background-color: palegreen'><b>" );
		echo("<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>" );
		//
		echo("<td><b>CEL BS 2</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Blastoise?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color:'><b>CEL BS 4</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Charizard-V1-CELBS-4?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td><b>CEL BS 15</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Venusaur?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color:'><b>CEL BS 73</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Imposter-Professor-Oak?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td><b>CEL TR 8</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Dark-Gyarados?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
   echo("</tr>");
   echo("<tr>");
		echo("<td style='background-color:'><b>CEL TR 15</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Here-Comes-Team-Rocket?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color: '><b>CEL GC 15</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Rockets-Zapdos?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color:'><b>CEL WP 24</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/s-Pikachu?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td><b>CEL NG 20</b></td>" );// Mélo
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Cleffa?sellerCountry=12&sellerReputation=4&language=2&minCondition=2		
		echo("<td><b>CEL NR 66</b></td>" );   // Magicarpe Brillant
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Shining-Magikarp?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td><b>CEL MA 9</b></td>" ); //Groudon de Team Magma
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Team-Magmas-Groudon?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
   echo("</tr>");
   echo("<tr>");
		echo("<td style='background-color: '><b>CEL TRR 86</b></td>" );//Admin Rocket
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Rockets-Admin?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color: '><b>CEL LM 88</b></td>" );//Mew ex
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Mew-ex?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color: orange'><b>CEL DF 93</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Gardevoir-ex-Delta-Species?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td><b>CEL POP5 17</b></td>" );// Noctali 
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Umbreon-CELPOP5-17?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td><b>CEL GE 15</b></td>" );// Kaorine Lv.45
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Claydol-Lv45?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color: '><b>CEL RR 109</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Luxray-GL-LvX?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
   echo("</tr>");
   echo("<tr>");
		echo("<td><b>CEL SV 145</b></td>" );// Carchacrok [C] Lv.X 
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Garchomp-C-LvX?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td><b>CEL HS 107</b></td>" );// Donphan 
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Donphan?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td><b>CEL BLW 113</b></td>" );// Reshiram 
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Reshiram-V2?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color: #fff973'><b>CEL BLW 114</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Zekrom-V2?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td><b>CEL NXD 54</b></td>" );// Mewtwo EX 
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Mewtwo-EX?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color:'><b>CEL XY 97</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Xerneas-EX?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
   echo("</tr>");
   echo("<tr>");
		echo("<td style='background-color: orange'><b>CEL ROS 76</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/MRayquaza-EX?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
		echo("<td style='background-color: '><b>CEL GRI 60</b></td>" );
		// https://www.cardmarket.com/fr/Pokemon/Products/Singles/Celebrations/Tapu-Lele-GX?sellerCountry=12&sellerReputation=4&language=2&minCondition=2
	echo("</tr>");
?>
</table>
</div>
<p> Nb manquantes: 10 </p>

</body>
</html>