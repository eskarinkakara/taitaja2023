<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "taitajat2023";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Yhteys epäonnistui: " . $conn->connect_error);
}
?>