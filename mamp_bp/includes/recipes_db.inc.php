<?php

$data = [];
global $conn;

try {
    // 1) Haal alle recipes op (optioneel: limit/pagination)
    $stmt = $conn->prepare("SELECT recipeId, usersId, title, description, categoryId, imagePath, createdAt, updatedAt FROM recipes ORDER BY createdAt DESC");
    $stmt->execute();
    $recipes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($recipes as $r) {
        $recipeId = $r['recipeId'];

        // 2) Ingrediënten ophalen
        $stmtIng = $conn->prepare("SELECT name, quantity FROM ingredients WHERE recipeId = ? ORDER BY ingredientId ASC");
        $stmtIng->execute([$recipeId]);
        $ingredientsRows = $stmtIng->fetchAll(PDO::FETCH_ASSOC);
        $ingredients = [];
        foreach ($ingredientsRows as $ing) {
            $ingredients[] = ($ing['quantity'] ? $ing['quantity'] . ' ' : '') . $ing['name'];
        }

        // 3) Stappen ophalen
        $stmtSteps = $conn->prepare("SELECT stepNumber, instruction FROM steps WHERE recipeId = ? ORDER BY stepNumber ASC");
        $stmtSteps->execute([$recipeId]);
        $stepsRows = $stmtSteps->fetchAll(PDO::FETCH_ASSOC);
        $steps = [];
        foreach ($stepsRows as $st) {
            $steps[] = [
                'stepNumber' => $st['stepNumber'],
                'instructions' => $st['instruction']
            ];
        }

        // 4) Tags ophalen (names)
        $stmtTags = $conn->prepare("
            SELECT t.name 
            FROM tags t
            JOIN recipe_tags rt ON rt.tagId = t.tagId
            WHERE rt.recipeId = ?
            ORDER BY t.name ASC
        ");
        $stmtTags->execute([$recipeId]);
        $tagRows = $stmtTags->fetchAll(PDO::FETCH_COLUMN);
        // normaliseer tag-waarden (lowercase) als je frontend dat verwacht
        $tags = array_map('strtolower', $tagRows);

        // 5) Image pad fallback: gebruik imagePath of placeholder
        $img = $r['imagePath'] ? $r['imagePath'] : 'recepten/placeholder.jpg';

        // 6) categorie id (houd integer)
        $category_id = $r['categoryId'];

        // 7) Bouw item in precies dezelfde vorm als jouw oude $data array
        $data[] = [
            'id' => (string)$recipeId,
            'category_id' => (string)$category_id,
            'title' => $r['title'],
            'img' => $img,
            'description' => $r['description'],
            'tags' => $tags,
            'steps' => $steps,
            'ingredients' => $ingredients,
            'createdAt' => $r['createdAt'],
            'updatedAt' => $r['updatedAt'],
            'usersId' => $r['usersId']
        ];
    }

} catch (PDOException $e) {
    // Foutafhandeling - debug tijdelijk
    error_log("recipes_db.inc.php error: " . $e->getMessage());
    $data = []; // fallback
}
