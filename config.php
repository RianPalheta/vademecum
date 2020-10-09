<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "https://mercadotucujur.com/");
	$config['dbname'] = 'merc8158_vademecum';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'merc8158_rian';
	$config['dbpass'] = '123456';
} else {
	define("BASE_URL", "https://mercadotucujur.com/");
	$config['dbname'] = 'merc8158_vademecum';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'merc8158_rian';
	$config['dbpass'] = '123456';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>