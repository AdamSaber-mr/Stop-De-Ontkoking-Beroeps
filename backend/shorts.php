<?php
$category_id = $_GET['catogory_id'];

include_once './header.php';

$data = [
    // Category 1 – Breakfast
    [
        "category_id" => "1",
        "name" => "Sunrise Smoothie",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Sunrise Smoothie Recipe",
            "description" => "Blend fresh fruits with yogurt for a refreshing morning boost.",
            "ingredients" => [
                "1 banana",
                "1/2 cup strawberries",
                "1/2 cup yogurt",
                "1 tsp honey"
            ]
        ]
    ],
    [
        "category_id" => "1",
        "name" => "Avocado Toast Delight",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Avocado Toast Recipe",
            "description" => "Creamy avocado on whole-grain bread with a sprinkle of chili flakes.",
            "ingredients" => [
                "1 slice whole-grain bread",
                "1/2 avocado",
                "Pinch of chili flakes",
                "Salt to taste"
            ]
        ]
    ],
    [
        "category_id" => "1",
        "name" => "Berry Oat Bowl",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Berry Oat Bowl Recipe",
            "description" => "Cook oats and top with fresh berries and nuts for a healthy start.",
            "ingredients" => [
                "1/2 cup oats",
                "1/2 cup milk",
                "1/4 cup mixed berries",
                "1 tbsp almonds"
            ]
        ]
    ],
    [
        "category_id" => "1",
        "name" => "Tropical Yogurt Parfait",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Tropical Yogurt Parfait",
            "description" => "Layer yogurt, granola, and tropical fruits for a quick breakfast.",
            "ingredients" => [
                "1/2 cup yogurt",
                "1/4 cup granola",
                "1/4 cup mango chunks",
                "1 tsp chia seeds"
            ]
        ]
    ],
    [
        "category_id" => "1",
        "name" => "Spinach & Egg Wrap",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Spinach & Egg Wrap Recipe",
            "description" => "Scramble eggs with fresh spinach and wrap in a whole wheat tortilla.",
            "ingredients" => [
                "1 whole wheat tortilla",
                "2 eggs",
                "1/2 cup spinach",
                "Salt & pepper"
            ]
        ]
    ],

    // Category 2 – Lunch
    [
        "category_id" => "2",
        "name" => "Mediterranean Quinoa Salad",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Mediterranean Quinoa Salad",
            "description" => "Mix quinoa with tomatoes, cucumber, and feta for a light lunch.",
            "ingredients" => [
                "1 cup cooked quinoa",
                "1/2 cup cherry tomatoes",
                "1/4 cup cucumber",
                "2 tbsp feta cheese",
                "Olive oil & lemon juice"
            ]
        ]
    ],
    [
        "category_id" => "2",
        "name" => "Grilled Veggie Wrap",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Grilled Veggie Wrap Recipe",
            "description" => "Roasted veggies in a tortilla with hummus for a filling lunch.",
            "ingredients" => [
                "1 whole wheat tortilla",
                "1/2 cup roasted bell peppers",
                "1/4 cup zucchini slices",
                "2 tbsp hummus"
            ]
        ]
    ],
    [
        "category_id" => "2",
        "name" => "Chicken Pesto Pasta",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Chicken Pesto Pasta",
            "description" => "Toss cooked pasta with grilled chicken and homemade pesto.",
            "ingredients" => [
                "200g pasta",
                "100g grilled chicken",
                "2 tbsp pesto",
                "Parmesan for topping"
            ]
        ]
    ],
    [
        "category_id" => "2",
        "name" => "Sweet Potato & Black Bean Bowl",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Sweet Potato & Black Bean Bowl",
            "description" => "Roasted sweet potatoes with black beans and avocado slices.",
            "ingredients" => [
                "1 cup roasted sweet potatoes",
                "1/2 cup black beans",
                "1/4 avocado",
                "1 tsp lime juice"
            ]
        ]
    ],
    [
        "category_id" => "2",
        "name" => "Caprese Sandwich",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Caprese Sandwich Recipe",
            "description" => "Fresh mozzarella, tomato, and basil on ciabatta bread.",
            "ingredients" => [
                "2 slices ciabatta",
                "2 slices mozzarella",
                "3 tomato slices",
                "Fresh basil leaves",
                "Balsamic drizzle"
            ]
        ]
    ],

    // Category 3 – Dinner
    [
        "category_id" => "3",
        "name" => "Lemon Herb Salmon",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Lemon Herb Salmon",
            "description" => "Baked salmon with herbs and lemon slices for a light dinner.",
            "ingredients" => [
                "150g salmon fillet",
                "1 tsp olive oil",
                "Lemon slices",
                "Fresh dill"
            ]
        ]
    ],
    [
        "category_id" => "3",
        "name" => "Stuffed Bell Peppers",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Stuffed Bell Peppers",
            "description" => "Bell peppers stuffed with rice, veggies, and cheese.",
            "ingredients" => [
                "2 bell peppers",
                "1/2 cup cooked rice",
                "1/4 cup diced tomatoes",
                "2 tbsp shredded cheese"
            ]
        ]
    ],
    [
        "category_id" => "3",
        "name" => "Garlic Shrimp Stir Fry",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Garlic Shrimp Stir Fry",
            "description" => "Quick stir-fry of shrimp with veggies and garlic sauce.",
            "ingredients" => [
                "100g shrimp",
                "1/2 cup broccoli",
                "1/4 cup bell peppers",
                "1 tsp garlic sauce"
            ]
        ]
    ],
    [
        "category_id" => "3",
        "name" => "Quinoa & Veggie Bowl",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Quinoa & Veggie Bowl",
            "description" => "Protein-packed quinoa with roasted vegetables for dinner.",
            "ingredients" => [
                "1 cup cooked quinoa",
                "1/2 cup roasted vegetables",
                "1 tsp olive oil",
                "Pinch of salt"
            ]
        ]
    ],
    [
        "category_id" => "3",
        "name" => "Chicken & Spinach Skillet",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Chicken & Spinach Skillet",
            "description" => "Sautéed chicken with spinach and herbs for a quick dinner.",
            "ingredients" => [
                "150g chicken breast",
                "1 cup spinach",
                "1 tsp olive oil",
                "Garlic & herbs"
            ]
        ]
    ],

    // Category 4 – Snacks
    [
        "category_id" => "4",
        "name" => "Nutty Energy Bites",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Nutty Energy Bites",
            "description" => "Quick bites made with nuts, oats, and honey for a boost.",
            "ingredients" => [
                "1 cup oats",
                "1/2 cup peanut butter",
                "2 tbsp honey",
                "1/4 cup chopped almonds"
            ]
        ]
    ],
    [
        "category_id" => "4",
        "name" => "Veggie Chips",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Veggie Chips Recipe",
            "description" => "Baked veggie slices seasoned lightly for a healthy snack.",
            "ingredients" => [
                "1 cup sweet potato slices",
                "1 cup zucchini slices",
                "1 tsp olive oil",
                "Salt & pepper"
            ]
        ]
    ],
    [
        "category_id" => "4",
        "name" => "Mini Caprese Skewers",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Mini Caprese Skewers",
            "description" => "Tomato, mozzarella, and basil on skewers for easy snacking.",
            "ingredients" => [
                "Cherry tomatoes",
                "Mini mozzarella balls",
                "Fresh basil leaves",
                "Balsamic glaze"
            ]
        ]
    ],
    [
        "category_id" => "4",
        "name" => "Spiced Popcorn",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Spiced Popcorn",
            "description" => "Air-popped popcorn tossed with light spices for flavor.",
            "ingredients" => [
                "2 cups popcorn",
                "1/2 tsp paprika",
                "1/4 tsp salt",
                "1 tsp olive oil"
            ]
        ]
    ],
    [
        "category_id" => "4",
        "name" => "Fruit & Yogurt Cups",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Fruit & Yogurt Cups",
            "description" => "Layered yogurt with fresh fruit for a sweet snack.",
            "ingredients" => [
                "1/2 cup yogurt",
                "1/4 cup mixed berries",
                "1 tsp honey",
                "1 tbsp granola"
            ]
        ]
    ],

    // Category 5 – Desserts
    [
        "category_id" => "5",
        "name" => "Chocolate Banana Muffin",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Chocolate Banana Muffin",
            "description" => "Moist muffins with ripe bananas and chocolate chips.",
            "ingredients" => [
                "1 banana",
                "100g flour",
                "50g sugar",
                "1 egg",
                "50g chocolate chips"
            ]
        ]
    ],
    [
        "category_id" => "5",
        "name" => "Berry Yogurt Parfait",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Berry Yogurt Parfait",
            "description" => "Layer yogurt with berries and granola for a sweet treat.",
            "ingredients" => [
                "1/2 cup yogurt",
                "1/4 cup berries",
                "1 tbsp granola",
                "1 tsp honey"
            ]
        ]
    ],
    [
        "category_id" => "5",
        "name" => "Mini Chocolate Tart",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Mini Chocolate Tart",
            "description" => "Rich chocolate tart in a small, decadent portion.",
            "ingredients" => [
                "50g chocolate",
                "30g flour",
                "20g butter",
                "1 tsp sugar"
            ]
        ]
    ],
    [
        "category_id" => "5",
        "name" => "Coconut Macaroons",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Coconut Macaroons",
            "description" => "Chewy coconut treats perfect for dessert lovers.",
            "ingredients" => [
                "100g shredded coconut",
                "50g condensed milk",
                "1 egg white"
            ]
        ]
    ],
    [
        "category_id" => "5",
        "name" => "Lemon Drizzle Cake",
        "img" => "chad-montano-lP5MCM6nZ5A-unsplash 1.png",
        "recipe" => [
            "title" => "Lemon Drizzle Cake",
            "description" => "Light and zesty cake topped with a sweet lemon glaze.",
            "ingredients" => [
                "100g flour",
                "50g sugar",
                "50g butter",
                "1 egg",
                "1 tsp lemon zest"
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
