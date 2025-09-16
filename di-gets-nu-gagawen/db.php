<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "x_admin_dashboard";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
?>
