<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "admin_panel";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
?>
