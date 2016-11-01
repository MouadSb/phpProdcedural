<?php

	$counter = 1;

	// WHILE && DO WHILE
	
	while($counter < 10){
		echo ' Compteur egale à '. $counter.'</br>';
		$counter++;
	}

	do{
		echo ' Compteur egale à '. $counter.'</br>';
		$counter++;
	}while($counter < 20);


	// FOR

	for($counter = 1; $counter <= 10 ; $counter++){
		echo $counter.'<br/>';
	}

	// FOR double , boucle sort à la premiére condition dans l'exemple i = 5

	for($counter = 1, $i =0 ; $counter <= 10, $i<5 ; $counter++ , $i++){
		echo 'Bloc compteur '.$counter.'<br/>';
		echo 'Bloc i '.$i.'<br/>';
	}

	// Switch

	$number = 26;
	switch($number){
		case 1 :
			echo 'One';
			break;
		case 2 : 
			echo 'Two';
			break;
		case 3 :
			echo 'Three';
			break;
		default :
			echo 'Not found';
			break;
	}


?>