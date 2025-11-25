<?php
// Foutmeldingen zichtbaar
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Sessie nodig voor token
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
global $conn;

// Database connectie
require '../includes/dbh.inc.php';

// Check of formulier is verstuurd
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Ongeldige aanvraag.";
    exit;
}

// Token check
if (!isset($_POST["token"]) || $_POST["token"] !== $_SESSION["token"]) {
    echo "Ongeldige token.";
    exit;
}

// Gegevens ophalen
$recipeId = trim($_POST["id"]);
$title = trim($_POST["title"]);
$description = trim($_POST["description"]);
$categoryId = trim($_POST["categoryId"]);

$tags = isset($_POST["tags"]) ? $_POST["tags"] : [];
$ingredients = isset($_POST["ingredients"]) ? $_POST["ingredients"] : [];
$steps = isset($_POST["steps"]) ? $_POST["steps"] : [];

// === VALIDATIE ===
$errors = [];

if (empty($title)) {
    $errors['title'] = "Titel mag niet leeg zijn.";
}
if (empty($description)) {
    $errors['description'] = "Beschrijving mag niet leeg zijn.";
}
if (empty($categoryId)) {
    $errors['categoryId'] = "Categorie is verplicht.";
}

if (!empty($errors)) {
    $_SESSION['fouten'] = $errors;
    header("Location: ./change_recipe.php?id=" . $recipeId);
    exit;
}

// ===== UPDATE RECIPE =====
try {
    $sql = "UPDATE recipes 
            SET title = :title, description = :description, categoryId = :categoryId 
            WHERE recipeId = :recipeId";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ":title" => $title,
        ":description" => $description,
        ":categoryId" => $categoryId,
        ":recipeId" => $recipeId
    ]);

} catch (PDOException $e) {
    echo "Fout bij updaten recipe: " . $e->getMessage();
    exit;
}

// =====================================================
// ===================== TAGS ==========================
// =====================================================

try {
    // Eerst alles verwijderen
    $stmt = $conn->prepare("DELETE FROM recipe_tags WHERE recipeId = ?");
    $stmt->execute([$recipeId]);

    // Daarna opnieuw toevoegen
    if (!empty($tags)) {
        $stmt = $conn->prepare("INSERT INTO recipe_tags (recipeId, tagId) VALUES (?, ?)");
        foreach ($tags as $tagId) {
            $stmt->execute([$recipeId, $tagId]);
        }
    }

} catch (PDOException $e) {
    echo "Fout bij updaten tags: " . $e->getMessage();
    exit;
}

// =====================================================
// ================== INGREDIENTEN =====================
// =====================================================

// 1. Haal bestaande ingredient IDs op
$stmt = $conn->prepare("SELECT ingredientId FROM ingredients WHERE recipeId = ?");
$stmt->execute([$recipeId]);
$existingIngs = $stmt->fetchAll(PDO::FETCH_COLUMN);

// IDs die in formulier voorkomen
$formIds = [];

foreach ($ingredients as $ing) {
    if (!empty($ing["id"])) {
        $formIds[] = $ing["id"];
    }
}

// ----- VERWIJDER ingredienten die niet meer bestaan -----
foreach ($existingIngs as $oldId) {
    if (!in_array($oldId, $formIds)) {
        $stmt = $conn->prepare("DELETE FROM ingredients WHERE ingredientId = ?");
        $stmt->execute([$oldId]);
    }
}

// ----- UPDATE of INSERT ingredienten -----
foreach ($ingredients as $ing) {
    // Bestehande update
    if (isset($ing["id"]) && !empty($ing["id"])) {

        $stmt = $conn->prepare("
            UPDATE ingredients 
            SET name = :name, quantity = :quantity
            WHERE ingredientId = :id
        ");

        $stmt->execute([
            ":name" => $ing["name"],
            ":quantity" => $ing["quantity"],
            ":id" => $ing["id"]
        ]);

    } else {
        // Nieuwe ingredient toevoegen
        $stmt = $conn->prepare("
            INSERT INTO ingredients (recipeId, name, quantity)
            VALUES (:recipeId, :name, :quantity)
        ");

        $stmt->execute([
            ":recipeId" => $recipeId,
            ":name" => $ing["name"],
            ":quantity" => $ing["quantity"]
        ]);
    }
}

// =====================================================
// ===================== STAPPEN =======================
// =====================================================

// 1. Haal bestaande step IDs
$stmt = $conn->prepare("SELECT stepId FROM steps WHERE recipeId = ?");
$stmt->execute([$recipeId]);
$existingSteps = $stmt->fetchAll(PDO::FETCH_COLUMN);

// IDs in formulier
$formStepIds = [];
foreach ($steps as $st) {
    if (!empty($st["id"])) {
        $formStepIds[] = $st["id"];
    }
}

// ----- VERWIJDER stappen die weg zijn -----
foreach ($existingSteps as $oldId) {
    if (!in_array($oldId, $formStepIds)) {
        $stmt = $conn->prepare("DELETE FROM steps WHERE stepId = ?");
        $stmt->execute([$oldId]);
    }
}

// ----- UPDATE / INSERT stappen -----
$stepNumber = 1;

foreach ($steps as $step) {

    if (!empty($step["id"])) {
        // UPDATE
        $stmt = $conn->prepare("
            UPDATE steps 
            SET instruction = :instruction, stepNumber = :number
            WHERE stepId = :id
        ");
        $stmt->execute([
            ":instruction" => $step["instruction"],
            ":number" => $stepNumber,
            ":id" => $step["id"]
        ]);

    } else {
        // INSERT
        $stmt = $conn->prepare("
            INSERT INTO steps (recipeId, instruction, stepNumber)
            VALUES (:recipeId, :instruction, :number)
        ");
        $stmt->execute([
            ":recipeId" => $recipeId,
            ":instruction" => $step["instruction"],
            ":number" => $stepNumber
        ]);
    }

    $stepNumber++;
}

// === KLAAR ===
header("Location: ../profile.php");
exit;
