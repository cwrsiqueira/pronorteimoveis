<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://pronorteimoveis.pc/");
	$config['dbname'] = 'cadastro_imobiliario';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "https://pronorteimoveis.com.br/");
	$config['dbname'] = 'pronor28_cadastro-imobiliario';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'pronor28_carlos';
	$config['dbpass'] = 'cwrs1909';
}

global $db;
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}