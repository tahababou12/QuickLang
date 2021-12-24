<?php
$host="localhost";
$login="quicklan_user";
$pass="taha/123@@";
$bdd="quicklan_database";

$cnx=mysqli_connect($host, $login, $pass);
mysqli_select_db($cnx,$bdd);

mysqli_query($cnx,"SET NAMES 'utf8'");
 ini_set('display_errors', 1); 

?>