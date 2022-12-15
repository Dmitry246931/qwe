<?php

$servername = 'localhost';
$database = 'apple';
$username = 'root';
$password = '';


$induction = mysqli_connect($servername, $username, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
