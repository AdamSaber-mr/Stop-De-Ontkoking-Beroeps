<?php
$category_id = $_GET['catogory_id'];
$recept_id = $_GET['recept_id'];


include 'includes/recepies.inc.php';

$item_to_add = [];

if($category_id){
    foreach ($data as $item) {
        $item_category_id = (int)$item["category_id"];
    
        if ($item_category_id == $category_id) {
            $item_to_add[] = $item;
        }
    }

    shuffle($item_to_add);
}

if($recept_id){
    foreach ($data as $item) {
        $id = (int)$item["id"];

        if($id == $recept_id){
            $item_to_add[] = $item;
        }else{
            $other_items[] = $item;
        }
    }

    if (!empty($other_items)) {
        shuffle($other_items);
        $item_to_add = array_merge($item_to_add, $other_items);
    }
}

if (empty($item_to_add)){
    $item_to_add = array_merge($item_to_add, $data);
    shuffle($item_to_add);
}

include_once './header.php';
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
                <img src="images/<?= htmlspecialchars($item["img"]) ?>" alt="<?= htmlspecialchars($item["title"]) ?>">
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
