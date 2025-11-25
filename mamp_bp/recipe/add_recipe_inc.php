<?php
require '../includes/dbh.inc.php';
session_start();
global $conn;

// check login
if (!isset($_SESSION['usersId'])) {
    header("Location: ../login.php?error=notloggedin");
    exit;
}

$usersId = $_SESSION['usersId'];

// POST data
$title = $_POST['title'];
$description = $_POST['description'];
$categoryId = $_POST['categoryId'];
$tags = $_POST['tags'];

$ingredients = $_POST['ingredient_name'];
$quantities = $_POST['ingredient_quantity'];

$steps = $_POST['step_instruction'];

try {
    $conn->beginTransaction();

    // --- Insert recipe ---
    $stmt = $conn->prepare("
        INSERT INTO recipes (usersId, title, description, categoryId)
        VALUES (?, ?, ?, ?)
    ");
    $stmt->execute([$usersId, $title, $description, $categoryId]);

    $recipeId = $conn->lastInsertId();

    // --- Insert ingredients ---
    $stmtIng = $conn->prepare("
        INSERT INTO ingredients (recipeId, name, quantity)
        VALUES (?, ?, ?)
    ");

    for ($i = 0; $i < count($ingredients); $i++) {
        if (trim($ingredients[$i]) !== "") {
            $stmtIng->execute([
                $recipeId,
                $ingredients[$i],
                $quantities[$i]
            ]);
        }
    }

    // --- Insert steps ---
    $stmtSteps = $conn->prepare("
        INSERT INTO steps (recipeId, stepNumber, instruction)
        VALUES (?, ?, ?)
    ");

    for ($i = 0; $i < count($steps); $i++) {
        if (trim($steps[$i]) !== "") {
            $stmtSteps->execute([
                $recipeId,
                $i + 1,
                $steps[$i]
            ]);
        }
    }

    // --- Insert tags ---
    if (!empty($tags)) {
        $stmtTag = $conn->prepare("
            INSERT INTO recipe_tags (recipeId, tagId)
            VALUES (?, ?)
        ");
        foreach ($tags as $tagId) {
            $stmtTag->execute([$recipeId, $tagId]);
        }
    }

    $conn->commit();

    header("Location: ../profile.php?success=recipe_added");
    exit;

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
