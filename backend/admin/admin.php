<?php
// Connectie maken met de database
require '../includes/dbh.inc.php';
global $conn;

// query voorbereiden en uitvoeren
try {
    $query = "SELECT usersId, usersName, usersEmail, usersUid, role FROM users";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $resultaten = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die('Query error: ' . $e->getMessage());
}

// include view
include '../includes/admin.inc.php';
