<?php

$servername = "localhost";
$username = "root";
$password = "igor24";
$dbname = "registerUser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed".mysqli_connect_error());
} /*else{
    echo "Успех";
} ?>*/
