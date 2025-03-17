<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error){
    die($connection->connect_error);
}

?>
