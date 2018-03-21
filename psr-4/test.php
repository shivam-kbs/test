<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

require 'vendor/autoload.php';

$test = new App\Test;

$test->testing();