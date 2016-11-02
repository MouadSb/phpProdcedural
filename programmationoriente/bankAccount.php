<?php

	class bankAccount{

		private $accountNumber;
		private $balance;
		private static $var = 0; // Variable de classe

		public function __construct($accountNumber){
			$this->accountNumber = $accountNumber;
			static::$var++; // Appel static::$var dans classe
		}

		public function setBalance($balance){
			$this->balance = $balance;
		}

		public function getBalance(){
			return $this->balance;
		}

		public static function getVar(){
			return static::$var;
		}

		

	}

$myAccount = new bankAccount('le mien');
$myAccountt = new bankAccount('le tien');

//$myAccount->setBalance(2000);

print($myAccount->getBalance().''); 

echo bankAccount::getVar(); // appel variable de classe, appel par nom de classe hors classe