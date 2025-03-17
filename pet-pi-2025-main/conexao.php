<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_petland";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error){
    die($connection->connect_error);
}

?>
