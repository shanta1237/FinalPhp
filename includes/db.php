<?php
$host = '127.0.0.1:3306';
$username = 'root';
$password = 'Hauda@#$123a';
$dbname = 'bookingone';

$connection = mysqli_connect($host, $username, $password, $dbname);

if ($connection == false) {
	die("Fathal Error occure plz check you file config.php :cannot connect to db sorry.");
}
