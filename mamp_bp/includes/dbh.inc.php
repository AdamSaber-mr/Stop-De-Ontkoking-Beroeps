<?php
// Enable errors during development
ini_set("display_errors", 1);
error_reporting(E_ALL);

/*
 |--------------------------------------------------------------------------
 | Database Configuration (Auto-Switch)
 |--------------------------------------------------------------------------
 | Dit script kiest automatisch tussen:
 | - LOCAL MAMP (localhost)
 | - SCHOOL SERVER / LIVE SERVER
 |
 | Je hoeft zelf niks te veranderen.
 | Pas alleen de SCHOOL-gegevens 1x hieronder aan.
 |--------------------------------------------------------------------------
 */

// ==== LOCAL MAMP SETTINGS ====
$local = [
    "host" => "localhost",
    "port" => "8889", // Default MAMP MySQL port
    "dbname" => "loginSysteem_bp01",
    "user" => "root",
    "pass" => "root"
];

// ==== SCHOOL / LIVE SERVER SETTINGS ====
$server = [
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "loginSysteem_bp01",
    "user" => "bp102896",
    "pass" => "Adamsaber0182"
];

// ==== Auto-detect: local or server? ====
// We check if you are running on localhost
$isLocal =
    in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1']) ||
    str_contains($_SERVER['HTTP_HOST'], 'localhost');

// Choose the correct config
$config = $isLocal ? $local : $server;

// Build DSN
$dsn = "mysql:host={$config['host']};dbname={$config['dbname']};port={$config['port']};charset=utf8mb4";

try {
    $conn = new PDO($dsn, $config["user"], $config["pass"]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Debug message (OPTIONEEL — kan je uitzetten)
    // echo $isLocal ? "Connected to LOCAL database" : "Connected to SERVER database";

} catch (PDOException $e) {
    die("❌ Database connection failed: " . $e->getMessage());
}