<?php

$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername; dbname=NewDB", $username, $password);
    echo 'Connection successfully';
} catch (PDOException $e) {
    echo "Connection failed " .$e->getMessage();
}
//$conn = new mysqli($servername, $username, $password);
//
//if($conn->connect_error) {
//    die('Connection failed '.$conn->connect_error);
//}
//echo 'Connection successfully';
