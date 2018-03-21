<?php

class Test {

	public function __construct()
	{
		echo __CLASS__ . ' has been initiated.';
	}


	public function __destruct()
	{
		echo __CLASS__ . ' has been destroyed.';
	}

}

$onject = new Test;