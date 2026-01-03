<?php
$host = "sql206.infinityfree.com";
$user = "if0_40818115";
$pass = "jjsh12347";
$db = "if0_40818115_pateleria";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
