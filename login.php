<?php 


$host = 'localhost';
$data = 'minsandbox';
$user = 'Gustav';
$pass = 'Arisa2018';
$chrs = 'utf8';
$attr = "mysql:host=$host;dbname=$data;charset=$chrs";
$host = 'localhost';
$opts = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=> false,

];


?>