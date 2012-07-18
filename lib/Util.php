<?php

class Util {
	public function isEven($num) {
		if (! is_int($num)) {
			throw new Exception("Please provide an Int", 1);
		}
		if ($num > 0) {
			if ($num & 1) {
				print "Is an even number";
				return true;
			} else {
				print "Is an odd number";
				return false; 
			}
		} else {
			throw new Exception("Must be greater than 0", 1);
		}
	}
	
	public function isEvenAgain($num) {
		if (! is_int($num)) {
			throw new Exception("Please provide an Int", 1);
		}
		if ($num > 0) {
			if ($num & 1) {
				print "Is an even number";
				return true;
			} else {
				print "Is an odd number";
				return false; 
			}
		} else {
			throw new Exception("Must be greater than 0", 1);
		}
	}
	
	public function badFunction($pram) {
		if (true) {
			return true; 
		} else {
			return false; 
		}
		
		return false;
	}
}