<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "mydb";

$conn = mysqli_connect($host, $username, $password, $db);
mysqli_set_charset( $conn, 'utf8'); // pr définir l'encodage

if($conn->connect_error) {
    echo 'error';
    die("Unable to connect database: " . $conn->connect_error);
}else{
    echo 'connect ok';
}


