<?php

// Connectie maken met de database
require '../includes/dbh.inc.php';

$id = $_GET['id']; // Haal de id op uit de url

function getRecipeData($id)
{
    global $conn;

    // 1. Recept zelf
    $stmt = $conn->prepare("SELECT * FROM recipes WHERE recipeId = :id");
    $stmt->execute(['id' => $id]);
    $recipe = $stmt->fetch(PDO::FETCH_ASSOC);

    // 2. Ingrediënten
    $stmt = $conn->prepare("SELECT * FROM ingredients WHERE recipeId = :id");
    $stmt->execute(['id' => $id]);
    $ingredients = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 3. Stappen
    $stmt = $conn->prepare("SELECT * FROM steps WHERE recipeId = :id ORDER BY stepNumber ASC");
    $stmt->execute(['id' => $id]);
    $steps = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 4. Tags Vinkjes
    $stmt = $conn->prepare("SELECT tagId FROM recipe_tags WHERE recipeId = :id");
    $stmt->execute(['id' => $id]);
    $tags = $stmt->fetchAll(PDO::FETCH_COLUMN);

    return [
        'recipe' => $recipe,
        'ingredients' => $ingredients,
        'steps' => $steps,
        'tags' => $tags
    ];
}


$resultaat = getRecipeData($id);
include './change_inc_recipe.php';