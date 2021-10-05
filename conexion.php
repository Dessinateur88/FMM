<?php
//db details
$dbHost = 'fmm-test.mysql.database.azure.com';
$dbUsername = 'fmm@fmm-test';
$dbPassword = '624UB8VWV61V7XS4$';
$dbName = 'fmm';
$port = '3306';
//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $port);
/*$mysqli=new mysqli ('localhost', 'root', '', 'fmm')*/

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
