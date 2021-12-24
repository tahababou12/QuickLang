<?php
include_once('include/Database.php');
define('SS_DB_NAME', 'quicklan_database');
define('SS_DB_USER', 'quicklan_user');
define('SS_DB_PASSWORD', 'taha/123@@');
define('SS_DB_HOST', 'localhost');

$dsn	= 	"mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST.";charset=utf8";
$pdo	=	"";
try {
	$pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
}catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$db 	=	new Database($pdo);
?>