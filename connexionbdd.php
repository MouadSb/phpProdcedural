<?php
	try {
		new PDO('mysql:host=localost:3306;dbname=test;charset=utf8', 'root', '');
	}catch(PDOException $e){
		die(' Error : '. $e->getMessage());
	}
?>