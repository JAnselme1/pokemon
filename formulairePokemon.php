<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>échange</title>
<style>
.container {
    display: inline-block;
    border: 20px solid #000;
}
.ecart {
	margin-top: 1em;
	padding-top: 0.5em
}
textarea {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;

	width: 100%;
}
</style>
</head>
<body>
		
<h3>Formulaire d'échange de cartes pokemon</h1>

<form action="mail.php" method="get" enctype="text/plain" target="_blank">
	<div style="display: block;">
		<div class=container style="border: 1px solid grey;padding-left:1em;width: 90%;">
			<label for="nom">nom*</label>
			<input class=ecart type="text" id="nom" name="nom" required ><br>
			<label for="mail">mail*</label>
			<input class=ecart type="mail" id="mail" name="mail" required><br><br>
			<label for="cartesVoulues">je veux les cartes:</label> <br>
			<textarea id="cartesVoulues" name="cartesVoulues" rows="5" cols="33"></textarea><br>
			<label for="cartesDonnees">je donne les cartes:</label> <br>
			<textarea id="cartesDonnees" name="cartesDonnees" rows="5" cols="33"></textarea>
			<div style="padding-right: 0.5em">ATTENTION, nous ne prenons seulement les cartes en <span style="color:red;font-weight:bold">TRES BON ETAT</span></div>
		</div>
	</div>

	<input style="background-color: palegreen" class=ecart type="submit" value="envoyer">
</form>

<a href="index.php"><img src='img/retour.jpg' alt=retour width=50em></a>


</body>
</html>
