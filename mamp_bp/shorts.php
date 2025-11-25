<?php
include 'includes/dbh.inc.php';
include_once './header.php';
global $conn;

// Start alleen een sessie als er nog geen actief is
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // <-- essentieel om $_SESSION te gebruiken

$category_id = isset($_GET['catogory_id']) ? (int)$_GET['catogory_id'] : null;
$recept_id = isset($_GET['recept_id']) ? (int)$_GET['recept_id'] : null;

$item_to_add = [];

if ($recept_id) {
    // Haal het gekozen recept
    $stmt = $conn->prepare("SELECT recipeId, title, description, categoryId, imagePath FROM recipes WHERE recipeId = ?");
    $stmt->execute([$recept_id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($r) {
        // ingredients
        $stmtIng = $conn->prepare("SELECT name, quantity FROM ingredients WHERE recipeId = ?");
        $stmtIng->execute([$recept_id]);
        $ingredientsRows = $stmtIng->fetchAll(PDO::FETCH_ASSOC);
        $ingredients = array_map(function($i){ return ($i['quantity']? $i['quantity'].' ':'') . $i['name']; }, $ingredientsRows);

        // steps
        $stmtSteps = $conn->prepare("SELECT stepNumber, instruction FROM steps WHERE recipeId = ? ORDER BY stepNumber ASC");
        $stmtSteps->execute([$recept_id]);
        $stepsRows = $stmtSteps->fetchAll(PDO::FETCH_ASSOC);
        $steps = [];
        foreach ($stepsRows as $st) $steps[] = ['stepNumber'=>$st['stepNumber'],'instructions'=>$st['instruction']];

        $img = $r['imagePath'] ? $r['imagePath'] : 'recepten/placeholder.jpg';

        $item_to_add[] = [
                'id' => (string)$r['recipeId'],
                'category_id' => (string)$r['categoryId'],
                'title' => $r['title'],
                'img' => $img,
                'description' => $r['description'],
                'tags' => [], // optioneel: haal tags als nodig
                'steps' => $steps,
                'ingredients' => $ingredients
        ];
    }
}

// fallback: toon een aantal random recipes als $item_to_add leeg is
if (empty($item_to_add)) {
    $stmt = $conn->prepare("SELECT recipeId, title, description, categoryId, imagePath FROM recipes ORDER BY RAND() LIMIT 6");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $r) {
        $id = $r['recipeId'];
        // basic ingredients + steps as above or leave empty
        $item_to_add[] = [
                'id' => (string)$id,
                'category_id' => (string)$r['categoryId'],
                'title' => $r['title'],
                'img' => $r['imagePath'] ? $r['imagePath'] : 'recepten/placeholder.jpg',
                'description' => $r['description'],
                'tags' => [],
                'steps' => [],
                'ingredients' => []
        ];
    }
}
?>


<script>
    document.getElementById("header").classList.add("shrink")
</script>

<link rel="stylesheet" href="styles/shorts.css">


<div id="parrent_short_container">
    <div id="short_container">
        <?php $first = true; ?>
        <?php foreach ($item_to_add as $item): ?>
            <?php $active_class = $first ? "active" : ""; ?>
            <div class="short <?= $active_class ?>">
                <h1><?= htmlspecialchars($item["title"]) ?></h1>
                <img src="<?= htmlspecialchars($item["img"]) ?>" alt="<?= htmlspecialchars($item["title"]) ?>">
            </div>
            <?php $first = false; ?>
        <?php endforeach; ?>
    </div>

    <div id="recepy">
        <?php if (!empty($item_to_add)): ?>
            <?php 
                // use the first recipe as default display
                $recipe = $item_to_add[0];
            ?>
            <h2><?= htmlspecialchars($recipe["title"]) ?></h2>
            <p><?= htmlspecialchars($recipe["description"]) ?></p>

            <h3>Ingredients</h3>
            <ul>
                <?php foreach ($recipe["ingredients"] as $ingredient): ?>
                    <li><?= htmlspecialchars($ingredient) ?></li>
                <?php endforeach; ?>
            </ul>

            <?php if (!empty($recipe["steps"])): ?>
                <h3>Steps</h3>
                <ol>
                    <?php foreach ($recipe["steps"] as $step): ?>
                        <li>
                            <strong>Step <?= htmlspecialchars($step["stepNumber"]) ?>:</strong>
                            <?= htmlspecialchars($step["instructions"]) ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <div id="button_container">
        <div id="favroute" class="short_button" onclick="heart()">
            <img src="images/heart_unfilled.png" alt="Favorite">
        </div>

        <div id="info" class="short_button" onclick="toggle_recepy_window()">
            <img src="images/recepy.png" alt="Info">
        </div>
    </div>
</div>


<script src="js/shorts.js"></script>
