<?php 
$data = [
    // Category 1 – Breakfast
    [
        "id" => "1",
        "category_id" => "1",
        "title" => "Berry Oatmeal Bowl",
        "img" => "recepten/breakfast/Triple-Berry-Oatmeal-Breakfast-Bowl-3.jpg",
        "description" => "Warm oatmeal topped with fresh berries and honey.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Cook oats in milk over medium heat until soft."],
            ["stepNumber" => 2, "instructions" => "Add a drizzle of honey and stir well."],
            ["stepNumber" => 3, "instructions" => "Top with fresh berries before serving."]
        ],
        "ingredients" => [
            "1/2 cup oats",
            "1 cup milk",
            "1 tbsp honey",
            "1/4 cup mixed berries"
        ]
    ],
    [
        "id" => "2",
        "category_id" => "1",
        "title" => "Avocado Toast",
        "img" => "recepten/breakfast/AvocadoToastwithEggFranceC4x3-bb87e3bbf1944657b7db35f1383fabdb.jpg",
        "description" => "Toasted bread topped with creamy avocado and chili flakes.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Toast the bread slice until golden brown."],
            ["stepNumber" => 2, "instructions" => "Mash avocado with salt and lemon juice."],
            ["stepNumber" => 3, "instructions" => "Spread avocado on toast and sprinkle chili flakes."]
        ],
        "ingredients" => [
            "1 slice whole-grain bread",
            "1/2 avocado",
            "Pinch of chili flakes",
            "Salt to taste"
        ]
    ],
    [
        "id" => "3",
        "category_id" => "1",
        "title" => "Yogurt Parfait",
        "img" => "recepten/breakfast/Greek-Yogurt-Parfait-Recipe.jpg",
        "description" => "Layered yogurt, granola, and fruit for a fresh morning treat.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Add yogurt to a glass or bowl."],
            ["stepNumber" => 2, "instructions" => "Layer with granola and sliced fruit."],
            ["stepNumber" => 3, "instructions" => "Drizzle honey and serve chilled."]
        ],
        "ingredients" => [
            "1/2 cup yogurt",
            "1/4 cup granola",
            "1/4 cup fruit slices",
            "1 tsp honey"
        ]
    ],

    // Category 2 – Lunch
    [
        "id" => "4",
        "category_id" => "2",
        "title" => "Chicken Caesar Wrap",
        "img" => "recepten/lunch/Chicken-Caesar-Wraps-14.jpg",
        "description" => "Grilled chicken and crisp lettuce in a soft tortilla wrap.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Grill chicken breast until cooked through."],
            ["stepNumber" => 2, "instructions" => "Slice chicken and mix with Caesar dressing."],
            ["stepNumber" => 3, "instructions" => "Wrap in a tortilla with lettuce and cheese."]
        ],
        "ingredients" => [
            "1 tortilla",
            "100g grilled chicken",
            "Lettuce leaves",
            "Caesar dressing",
            "Grated Parmesan"
        ]
    ],
    [
        "id" => "5",
        "category_id" => "2",
        "title" => "Mediterranean Quinoa Salad",
        "img" => "recepten/lunch/med-quinoa-salad-process-1-ingredients.jpeg",
        "description" => "Refreshing salad with quinoa, feta, cucumber, and tomatoes.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Cook quinoa and let it cool."],
            ["stepNumber" => 2, "instructions" => "Chop vegetables and mix with quinoa."],
            ["stepNumber" => 3, "instructions" => "Add feta cheese and drizzle with olive oil and lemon juice."]
        ],
        "ingredients" => [
            "1 cup cooked quinoa",
            "1/2 cup cherry tomatoes",
            "1/4 cup cucumber",
            "2 tbsp feta cheese",
            "Olive oil & lemon juice"
        ]
    ],
    [
        "id" => "6",
        "category_id" => "2",
        "title" => "Grilled Veggie Sandwich",
        "img" => "recepten/lunch/Grilled-Vegetable-Burrata-Sandwich-with-Lemon-Thyme-Honey-Mustard-1.jpg",
        "description" => "A warm sandwich with grilled vegetables and pesto spread.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Grill sliced bell peppers and zucchini."],
            ["stepNumber" => 2, "instructions" => "Spread pesto on bread slices."],
            ["stepNumber" => 3, "instructions" => "Assemble sandwich with veggies and grill briefly."]
        ],
        "ingredients" => [
            "2 slices bread",
            "1/2 cup grilled vegetables",
            "1 tbsp pesto",
            "1 slice cheese"
        ]
    ],

    // 🍛 Category 3 – Dinner
    [
        "id" => "7",
        "category_id" => "3",
        "title" => "Lemon Herb Salmon",
        "img" => "recepten/dinner/KALEJUNKIE-SHEET-PAN-LEMON-HERB-SALMON-3.jpg",
        "description" => "Baked salmon with herbs and lemon slices for a light meal.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Preheat oven to 200°C (400°F)."],
            ["stepNumber" => 2, "instructions" => "Place salmon on a baking tray lined with parchment paper."],
            ["stepNumber" => 3, "instructions" => "Top with olive oil, lemon slices, and dill, then bake for 15 minutes."]
        ],
        "ingredients" => [
            "150g salmon fillet",
            "1 tsp olive oil",
            "Lemon slices",
            "Fresh dill"
        ]
    ],
    [
        "id" => "8",
        "category_id" => "3",
        "title" => "Garlic Shrimp Stir Fry",
        "img" => "recepten/dinner/Garlic-Shrimp-Stir-Fry-14.webp",
        "description" => "Shrimp stir-fried with vegetables and a garlic soy sauce.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Heat oil in a pan and add garlic."],
            ["stepNumber" => 2, "instructions" => "Add shrimp and cook until pink."],
            ["stepNumber" => 3, "instructions" => "Add vegetables and stir-fry with soy sauce."]
        ],
        "ingredients" => [
            "100g shrimp",
            "1/2 cup mixed vegetables",
            "1 tbsp soy sauce",
            "1 tsp minced garlic"
        ]
    ],
    [
        "id" => "9",
        "category_id" => "3",
        "title" => "Chicken & Spinach Skillet",
        "img" => "recepten/dinner/creamy-skillet-chicken-with-spinach-mushrooms-7933679-3x2-1-56a3134d70b34e9fb2c7d675a0e301e8.jpg",
        "description" => "Sautéed chicken with fresh spinach in a garlic butter sauce.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Cook chicken pieces in a skillet with olive oil."],
            ["stepNumber" => 2, "instructions" => "Add garlic and butter, then stir in spinach until wilted."],
            ["stepNumber" => 3, "instructions" => "Season with salt and pepper to taste."]
        ],
        "ingredients" => [
            "150g chicken breast",
            "1 cup spinach",
            "1 tbsp butter",
            "1 tsp minced garlic"
        ]
    ],

    // Category 4 – Snacks
    [
        "id" => "10",
        "category_id" => "4",
        "title" => "Nutty Energy Bites",
        "img" => "recepten/snacks/Nutty-Energy-Bites-2.jpg",
        "description" => "Healthy bites made from oats, honey, and peanut butter.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Mix oats, peanut butter, and honey in a bowl."],
            ["stepNumber" => 2, "instructions" => "Roll mixture into small balls."],
            ["stepNumber" => 3, "instructions" => "Chill for 20 minutes before serving."]
        ],
        "ingredients" => [
            "1 cup oats",
            "1/2 cup peanut butter",
            "2 tbsp honey"
        ]
    ],
    [
        "id" => "11",
        "category_id" => "4",
        "title" => "Spiced Popcorn",
        "img" => "recepten/snacks/spiced_popcorn.jpg",
        "description" => "Air-popped popcorn tossed with paprika and olive oil.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Air-pop the popcorn kernels."],
            ["stepNumber" => 2, "instructions" => "Toss with olive oil, salt, and paprika."],
            ["stepNumber" => 3, "instructions" => "Serve warm and crunchy."]
        ],
        "ingredients" => [
            "2 cups popcorn",
            "1 tsp olive oil",
            "1/4 tsp paprika",
            "Pinch of salt"
        ]
    ],
    [
        "id" => "12",
        "category_id" => "4",
        "title" => "Fruit & Yogurt Cups",
        "img" => "recepten/snacks/Fruit-Yogurt-Parfait-11.jpg",
        "description" => "Small cups filled with yogurt and fresh fruits for a light snack.",
        "steps" => [
            ["stepNumber" => 1, "instructions" => "Spoon yogurt into a cup."],
            ["stepNumber" => 2, "instructions" => "Add chopped fruits on top."],
            ["stepNumber" => 3, "instructions" => "Sprinkle granola and drizzle honey before serving."]
        ],
        "ingredients" => [
            "1/2 cup yogurt",
            "1/4 cup mixed fruits",
            "1 tbsp granola",
            "1 tsp honey"
        ]
    ]
];

?>