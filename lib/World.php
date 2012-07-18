<?php

require_once 'Hello.php';

class World extends Hello {
	public function getMessage() {
		return parent::getMessage() . ", World";
	}
	
	public function isEvenNumber($num) {
		if ($num & 1) {
			//Will this still be duplicate code? 
			
			return true;
		} else {
			return false; 
		}
		
	}
}