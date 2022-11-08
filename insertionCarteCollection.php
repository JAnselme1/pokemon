<?php
require 'utilitaires/connection.php';	// connection à la base de données
?>
<?php 
try{
	$ps = $conn->prepare("INSERT INTO collection (referenceCM, reverse) VALUES (:referenceCM, :reverse)");
	$ps->execute([
		'referenceCM' => $_GET['referenceCM'],
		'reverse' => $_GET['reverse']
	]);
	$referer = $_SERVER['HTTP_REFERER'];
	header("Location: $referer");
	exit();	
	}
catch (PDOException $e){
	echo $e->getMessage();
}
require 'utilitaires/deconnection.php';
?>