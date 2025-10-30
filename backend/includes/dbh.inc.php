<?php
// Foutmeldingen aanzetten (handig tijdens ontwikkelen)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database gegevens
$dbServername = "localhost"; // Of de ip adress
$dbUsername = "bp102896";
$dbPassword = "Adamsaber0182";
$dbDatabase = "loginSysteem_bp01";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDatabase);

if (!$conn) {
    die("Connection failed: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
} else {
    echo "Verbonden met database!";
}