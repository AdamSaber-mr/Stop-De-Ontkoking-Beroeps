<?php
$category_id = $_GET['catogory_id'];

include_once './header.php';

$data = [
    [
        "category_id" => "1",
        "name" => "Super Cool Item",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Super Cool Item Recipe",
            "description" => "Mix all ingredients and serve fresh. Perfect for a quick snack!",
            "ingredients" => [
                "1 cup ingredient A",
                "2 spoons ingredient B",
                "A pinch of ingredient C"
            ]
        ]
    ],
    [
        "category_id" => "2",
        "name" => "Tasty Pasta",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Tasty Pasta Recipe",
            "description" => "Boil pasta, add sauce, and mix well. Ready in 15 minutes!",
            "ingredients" => [
                "200g pasta",
                "100ml tomato sauce",
                "50g cheese"
            ]
        ]
    ],
    [
        "category_id" => "3",
        "name" => "Fresh Salad Bowl",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Fresh Salad Bowl",
            "description" => "Chop veggies, add dressing, and toss. Healthy and fresh!",
            "ingredients" => [
                "100g lettuce",
                "50g tomatoes",
                "30g cucumber",
                "Dressing of choice"
            ]
        ]
    ],
    [
        "category_id" => "4",
        "name" => "Deluxe Burger",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Deluxe Burger",
            "description" => "Grill patty, add toppings, and assemble burger. Perfect for lunch!",
            "ingredients" => [
                "1 burger patty",
                "1 bun",
                "Lettuce",
                "Cheese",
                "Tomato slices"
            ]
        ]
    ],
    [
        "category_id" => "5",
        "name" => "Chocolate Cake Slice",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Chocolate Cake Slice",
            "description" => "Mix batter, bake, and top with icing. Sweet and delicious!",
            "ingredients" => [
                "200g flour",
                "100g butter",
                "75g sugar",
                "1 egg",
                "Chocolate chips"
            ]
        ]
    ]
];

$item_to_add = [];

foreach ($data as $item) {
    $item_category_id = (int)$item["category_id"];

    if($item_category_id == $category_id){
      $item_to_add[] = $item;
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
                <h1><?= htmlspecialchars($item["name"]) ?></h1>
                <img src="images/<?= htmlspecialchars($item["img"]) ?>">
            </div>
            <?php $first = false; ?>
        <?php endforeach; ?>
    </div>

    <div id="recepy">
        <?php if (!empty($item_to_add)): ?>
            <?php $recipe = $item_to_add[0]["recipe"]; ?>
            <h2><?= htmlspecialchars($recipe["title"]) ?></h2>
            <p><?= htmlspecialchars($recipe["description"]) ?></p>
            <ul>
                <?php foreach ($recipe["ingredients"] as $ingredient): ?>
                    <li><?= htmlspecialchars($ingredient) ?></li>
                <?php endforeach; ?>
            </ul>
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
