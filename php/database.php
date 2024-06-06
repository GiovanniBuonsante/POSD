<?php
// database.php
$servername = "localhost";
$username = "posd";
$password = "";
$dbname = "my_posd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>