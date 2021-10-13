<?php

/*$dbHost = 'fmm-test.mysql.database.azure.com';
$dbUsername = 'fmm@fmm-test';
$dbPassword = '624UB8VWV61V7XS4$';
$dbName = 'fmm';
$port = '3306';¨*/

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'fmm';
$port = '';

$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);




/*$mysqli=new mysqli ('localhost', 'root', '', 'fmm')*/

if ($mysqli->connect_error) {
    die("Connection failed: " . $db->connect_error);
    echo "No se encuentra Base de Datos"; 
}
?>
