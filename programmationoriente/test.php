<?php

	class Person{

		public $nom;
		public $prenom;
		

		/******** Constructeur ********/
		public function __construct($nom,$prenom){
			$this->nom = $nom;
			$this->prenom = $prenom;
		}

		/******** Method ********/

		public function danse(){
			echo $this->nom .' danse ';
		}

		/******** Method avec return ********/
		public function fullName($nom,$prenom){
			return $nom .'  '. $prenom;
			// return sprintf("%s %s",$this->nom,$this->prenom)
		}

	}

$honore = new Person('Mouad','Sbaii');
$honoree = new Person('S');

var_dump($honore->nom);
var_dump($honoree->nom);


$honore->danse();

$fullName = $honore->fullName('Mouad','Sbaiii');

echo 'ça marche '.$fullName;