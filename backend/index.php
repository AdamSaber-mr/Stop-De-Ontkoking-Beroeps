<?php
include_once './header.php';
?>

<div id="banner-1">
    <img src="images/chad-montano-lP5MCM6nZ5A-unsplash 1.png" alt="Category Icon">
    <h1>h1</h1>
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
                <img src="images/recepy_placholder.png" alt="Category Icon">
            </div>
            <h2 class="category-title">Breakfast</h2>
            <p class="category-description">
                This is a short description of the category or item. It gives users a quick idea of what it is about.
            </p>
        </div>

        <div class="category-item" onclick="goToUrl('shorts.php?catogory_id=2')">
            <div class="category-header">
                <img src="images/placeholder.svg" alt="Category Icon">
            </div>
            <h2 class="category-title">Lunch</h2>
            <p class="category-description">
                This is a short description of the category or item. It gives users a quick idea of what it is about.
            </p>
        </div>

        <div class="category-item" onclick="goToUrl('shorts.php?catogory_id=3')">
            <div class="category-header">
                <img src="images/placeholder.svg" alt="Category Icon">
            </div>
            <h2 class="category-title">Dinner</h2>
            <p class="category-description">
                This is a short description of the category or item. It gives users a quick idea of what it is about.
            </p>
        </div>

        <div class="category-item" onclick="goToUrl('shorts.php?catogory_id=4')">
            <div class="category-header">
                <img src="images/placeholder.svg" alt="Category Icon">
            </div>
            <h2 class="category-title">Snacks</h2>
            <p class="category-description">
                This is a short description of the category or item. It gives users a quick idea of what it is about.
            </p>
        </div>
    </div>
</div>

<div id="banner-2">
    <img src="images/odiseo-castrejon-1SPu0KT-Ejg-unsplash 1.png">
    <h1>h1</h1>
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
            <img src="images/recepy_placholder.png" alt="placeholder">
            <h1>h1</h1>
            <p>p</p>
        </div>

        <div id="info-cards-container">
            <div class="info-card">
                <img src="images/recepy_placholder.png">
                <h2>Card 1 Title</h2>
                <p>Some information for card 1.</p>
            </div>
            <div class="info-card">
                <img src="images/recepy_placholder.png">
                <h2>Card 2 Title</h2>
                <p>Some information for card 2.</p>
            </div>
        </div>
    </div>
</div>

<script src="./js/search.js"></script>

<?php
include_once './footer.php';
?>