<?php
// Foutmeldingen aanzetten (handig tijdens ontwikkelen)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database gegevens
$servername = "localhost"; // Of de ip adress
$username = "bp102896";
$password = "Adamsaber0182";
$database = "loginSysteem_bp01";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} else {
    echo "Verbonden met database!";
}