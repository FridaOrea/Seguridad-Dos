<?php
	$Numero = $_POST['num'];
	$Eleccion = $_POST['Cifrado'];
	$Primera;
	$Segunda;
	if($Eleccion == 'C'){
		$Primera = substr($Numero, 0, 4);
		$Segunda = substr($Numero, 4, 5);
		echo $Segunda.''.$Primera;
	}
	else{
		$Primera = substr($Numero, 0, 5);
		$Segunda = substr($Numero, 5, 4);
		echo $Segunda.''.$Primera;
	}
	
?>
