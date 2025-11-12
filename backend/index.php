<?php
include_once './header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<div id="banner-1">
    <img src="images/4e66cb90-fd12-4254-95ef-ad76a4dece73.jpg">
    <h1>
     From <span class="highlight">Cravings</span> to <span class="highlight2">Creations</span>
    </h1>
</div>

<div class="category-container">
    <div class="title-search-container">
        <h1>Category</h1>
        <div class="search" id="catogory_search">
            <button class="search-btn"><img src="images/magnifying-glass.png"></button>
            <input type="text" id="catogory_search_input" class="search-input" placeholder="Search..." />
        </div>
    </div>

    <div class="category-feed" id="catogory_items">
        <div class="category-item" onclick="goToUrl('shorts.php?catogory_id=1')">
            <div class="category-header">
                <img src="images/catogories/breakfast.jpg" alt="Category Icon">
            </div>
            <h2 class="category-title">Breakfast</h2>
            <p class="category-description">
                Breakfast is the first meal of the day, providing energy, boosting focus, and preparing the body and mind for daily activities.
            </p>
        </div>

        <div class="category-item" onclick="goToUrl('shorts.php?catogory_id=2')">
            <div class="category-header">
                <img src="images/catogories/lunch.jpg" alt="Category Icon">
            </div>
            <h2 class="category-title">Lunch</h2>
            <p class="category-description">
                Lunch is a midday meal that refuels the body, maintains energy levels, and supports focus and productivity for the rest of the day.
            </p>
        </div>

        <div class="category-item" onclick="goToUrl('shorts.php?catogory_id=3')">
            <div class="category-header">
                <img src="images/catogories/dinner.jpg" alt="Category Icon">
            </div>
            <h2 class="category-title">Dinner</h2>
            <p class="category-description">
                Dinner is the evening meal that nourishes the body, promotes relaxation, and provides an opportunity to connect and unwind after the day.
            </p>
        </div>

        <div class="category-item" onclick="goToUrl('shorts.php?catogory_id=4')">
            <div class="category-header">
                <img src="images/catogories/snacks.jpg" alt="Category Icon">
            </div>
            <h2 class="category-title">Snacks</h2>
            <p class="category-description">
                Snacks are small, quick bites that satisfy hunger, boost energy, and keep you focused between main meals.
            </p>
        </div>
    </div>
</div>

<div id="banner-2">
    <img src="images/duties-of-a-chef.jpg">
    <h1>Get <span class="highlight">Cooking!</span></h1>
    <button>Explore Recipes <i class="fas fa-utensils"></i></button>
</div>

<div class="category-container">
    <div class="title-search-container">
        <h1>Trending</h1>
        <div class="search">
            <button class="search-btn"><img src="images/magnifying-glass.png"></button>
            <input type="text" class="search-input" placeholder="Search..." />
        </div>
    </div>

    <div class="category-feed">
        <div class="category-item">
            <div class="category-header">
                <img src="images/placeholder.svg" alt="Category Icon">
            </div>
            <h2 class="category-title">Category Title</h2>
            <p class="category-description">
                This is a short description of the category or item. It gives users a quick idea of what it is about.
            </p>
        </div>

        <div class="category-item">
            <div class="category-header">
                <img src="images/placeholder.svg" alt="Category Icon">
            </div>
            <h2 class="category-title">Category Title</h2>
            <p class="category-description">
                This is a short description of the category or item. It gives users a quick idea of what it is about.
            </p>
        </div>

        <div class="category-item">
            <div class="category-header">
                <img src="images/placeholder.svg" alt="Category Icon">
            </div>
            <h2 class="category-title">Category Title</h2>
            <p class="category-description">
                This is a short description of the category or item. It gives users a quick idea of what it is about.
            </p>
        </div>

        <div class="category-item">
            <div class="category-header">
                <img src="images/placeholder.svg" alt="Category Icon">
            </div>
            <h2 class="category-title">Category Title</h2>
            <p class="category-description">
                This is a short description of the category or item. It gives users a quick idea of what it is about.
            </p>
        </div>
    </div>
</div>

<div id="Journal">
    <h1>Journal</h1>

    <div id="journal-main-container">
        <div id="journal-news-container">
            <img src="images/journal/sushi.jpg" alt="placeholder">
            <h1>Tokyo, Japan 🇯🇵 – Sushi Reinvented</h1>
            <p>Discover the art of sushi beyond the classics. Local chefs are experimenting with fusion rolls featuring tropical fruits, truffle oil, and even wagyu beef. Tip: Try the limited “Cherry Blossom Roll” before it’s gone!</p>
        </div>

        <div id="info-cards-container">
            <div class="info-card">
                <img src="images/journal/tagine.jpg">
                <h2>Marrakech, Morocco 🇲🇦 – Spice Symphony</h2>
                <p>Naples is calling pizza lovers! From the traditional Margherita baked in wood-fired ovens to modern takes with burrata and prosciutto, the city proves pizza is more than a meal—it’s an experience.</p>
            </div>
            <div class="info-card">
                <img src="images/journal/taco_truck.jpg">
                <h2>Mexico City, Mexico 🇲🇽 – Street Food Wonders</h2>
                <p>Tacos aren’t just food here—they’re a story in every bite. From al pastor served at sunrise to churros dusted with chili chocolate at sunset, Mexico City’s street food scene is vibrant, bold, and unforgettable.</p>
            </div>
        </div>
    </div>
</div>

<script src="./js/search.js"></script>

<?php
include_once './footer.php';
?>