<?php
require "../includes/dbh.inc.php";
global $conn;

$id = $_GET['id'] ?? 0;

// 1. Recipe
$stmt = $conn->prepare("SELECT * FROM recipes WHERE recipeId = :id");
$stmt->execute(['id' => $id]);
$recipe = $stmt->fetch(PDO::FETCH_ASSOC);

// 2. Category
$catStmt = $conn->prepare("SELECT name FROM categories WHERE categoryId = :cid");
$catStmt->execute(['cid' => $recipe['categoryId']]);
$category = $catStmt->fetchColumn();

// 3. Tags
$tagStmt = $conn->prepare("
    SELECT t.name 
    FROM tags t 
    JOIN recipe_tags rt ON rt.tagId = t.tagId 
    WHERE rt.recipeId = :id
");
$tagStmt->execute(['id' => $id]);
$tags = $tagStmt->fetchAll(PDO::FETCH_COLUMN);

// 4. Ingredients
$ingStmt = $conn->prepare("
    SELECT name, quantity 
    FROM ingredients 
    WHERE recipeId = :id
");
$ingStmt->execute(['id' => $id]);
$ingredients = $ingStmt->fetchAll(PDO::FETCH_ASSOC);

// 5. Steps
$stepStmt = $conn->prepare("
    SELECT stepNumber, instruction 
    FROM steps 
    WHERE recipeId = :id
    ORDER BY stepNumber ASC
");
$stepStmt->execute(['id' => $id]);
$steps = $stepStmt->fetchAll(PDO::FETCH_ASSOC);

include "./view_inc_recipe.php";
