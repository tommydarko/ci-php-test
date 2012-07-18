<?php

require_once 'Hello.php';

class World extends Hello {
	public function getMessage() {
		return parent::getMessage() . ", World";
	}
	
	public function isEven($num) {
		if ($num & 1) {
			return true;
		} else {
			return false; 
		}
	}
}