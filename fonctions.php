<?php

	$vGlobal = " et bonne journée ";



	function direBonjour($nom){
		global $vGlobal;
		return 'Bonjour '.$nom. ' '. $vGlobal;
	}

	echo direBonjour(' Mouad'). ' !';

?>