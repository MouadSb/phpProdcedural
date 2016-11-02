<?php


	class A{
			private static $v1 = 1;

			public function m(){
				echo self::$v1; 
				//echo static::$v1;  // affiche erreur
			}

	}

	class B extends A{
		public function m(){
			parent::m();
		}
	}


echo (new B)->m();