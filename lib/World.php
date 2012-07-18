<?php

require_once 'Hello.php';

class World extends Hello {
	public function getMessage() {
		return parent::getMessage() . ", World";
	}
	
	public function isEven($num) {
		if (! is_int($num)) {
			throw new Exception("Please provide an Int", 1);
		}
		if ($num & 1) {
			print "Is an even number";
			return true;
		} else {
			print "Is an odd number";
			return false; 
		}
	}
}