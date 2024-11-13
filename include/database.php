<?php

include("config.php");

$pdo = null;
try{
	$pdo = new PDO(
			"mysql:host={$database['host']};dbname={$database['dbname']}", 
			$database['username'], 
			$database['password']
		);

	$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
	echo '<div class="alert alert-danger" role="alert" style="z-index:99999">Mysql connection is not available!</div>';
	exit;
}