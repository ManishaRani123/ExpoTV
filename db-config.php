<?php
/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

// $databaseHost     = 'covid-response.mysql.database.azure.com';
// $databaseName     = 'expotv-new';
// $databaseUsername = 'saadmin@covid-response';
// $databasePassword = 'Nepal@123';


$databaseHost     = '149.255.62.60';
$databaseName     = 'eeadvent_expo';
$databaseUsername = 'eeadvent_expo';
$databasePassword = 'Nepal@123';


$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);