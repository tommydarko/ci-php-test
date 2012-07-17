<?php

require_once 'Hello.php';

class World extends Hello {
	public function getMessage() {
		return parent::getMessage() . ", World";
	}
}