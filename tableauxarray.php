<?php

	$tab = array(255,'test',2.5,true); // déclaration tableau

	$tab[4] = 'nouveau'; // Add nouveau element

	echo $tab[4]. '</br>' ; // affiche element

	print_r($tab); // affiche tout les elements

	var_dump($tab);




	// Tableaux associatif

	$tabasso = array('Pizzas' =>100, 'Mess' => 300 , 'Inde' => 'test');

	echo $tabasso['Inde'];
?>