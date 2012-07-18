<?php

class Util {
	public function isEven($num) {
		if ($num & 1) {
			print "Is an even number";
			return true;
		} else {
			print "Is an odd number";
			return false; 
		}
	}
	
	public function isEvenAgain($num) {
		if ($num & 1) {
			print "Is an even number";
			return true;
		} else {
			print "Is an odd number";
			return false; 
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