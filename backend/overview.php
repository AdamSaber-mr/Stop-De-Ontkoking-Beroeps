<?php
include_once './header.php';
$category_id = $_GET['catogory_id'];
include 'includes/recepies.inc.php';
$item_to_add = [];

foreach ($data as $item) {
    $item_category_id = (int)$item["category_id"];

    if ($item_category_id == $category_id) {
        $item_to_add[] = $item;
    }
}

$all_tags = [];
foreach ($item_to_add as $item) {
    if (!empty($item['tags'])) {
        foreach ($item['tags'] as $tag) {
            $all_tags[$tag] = true; 
        }
    }
}
$all_tags = array_keys($all_tags); 
sort($all_tags); 
?>

<link rel="stylesheet" href="./styles/pages/overview_page/overview_page.css">

<div id="overview_parrent">

<div id="side_bar">
    <h1>Test</h1>

    <div class="search" id="overview_search">
        <button class="search-btn"><img src="images/magnifying-glass.png"></button>
        <input type="text" id="overview_search_input" class="search-input" placeholder="Search">
    </div>

    <div class="category-container">
        <button class="category-btn" id="cat_button">Categories ▼</button>
        <ul class="category-list" id="list">
        <?php foreach ($all_tags as $tag): ?>
            <li onclick="showCatogory('<?= htmlspecialchars($tag) ?>')">
                <?= htmlspecialchars($tag) ?>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>  
</div>


<div id="recepy_wrapper">
<?php foreach ($item_to_add as $item) : ?>
    <div class="recepy" data-id="<?= htmlspecialchars($item['id']) ?>">
        <div class="recepy-header">
            <img src="images/<?= htmlspecialchars($item["img"]) ?>" alt="<?= htmlspecialchars($item["title"]) ?>">
        </div>
        <h1 class="recepy-title"><?= htmlspecialchars($item['title']) ?></h1>

        <?php if (!empty($item["tags"])): ?>
            <div class="recepy-tags">
                <?php foreach ($item["tags"] as $tag): ?>
                    <span class="tag"><?= htmlspecialchars($tag) ?></span>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <p class="recepy-description"><?= htmlspecialchars($item['description']) ?></p>
    </div>
<?php endforeach; ?>
</div>

<script type="module" defer>
    import { search } from "./js/search.js"
    document.getElementById("header").classList.add("shrink")

    const overview_search = document.getElementById("overview_search_input") 

    console.log(overview_search)


    overview_search.addEventListener("input", function() {
        const searchText = overview_search.value;
        search(document.getElementById("recepy_wrapper"), ".recepy", searchText, ".recepy-title");
    });
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const category_btn = document.getElementById("cat_button");

    category_btn.addEventListener("click", () => {
        document.querySelector(".category-container").classList.toggle("active");
    });
});
</script>

<script>
document.querySelectorAll('.recepy').forEach(recepy => {
    recepy.addEventListener('click', () => {
        id = recepy.dataset.id
        url = `shorts.php?recept_id=${id}`
         window.location.href = url;
    });
});


function showCatogory(category) {
    const recepy_wrapper = document.getElementById("recepy_wrapper");
    const recepies = recepy_wrapper.querySelectorAll(".recepy");

    recepies.forEach(recepy => {
        const tags = recepy.querySelectorAll(".tag");
        let shouldShow = false;

        tags.forEach(tag => {
            let tag_text = tag.innerHTML.toLowerCase();
            let category_lower = category.toLowerCase();

            if (tag_text === category_lower) {
                shouldShow = true;
            }
        });

        if (shouldShow) {
            recepy.style.display = "block";
        } else {
            recepy.style.display = "none";
        }
    });
}
</script>


<?php
include 'footer.php';
?>