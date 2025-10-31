<?php
$catogory_id = $_GET['catogory_id'];
include_once './header.php';
?>

<script>
    document.getElementById("header").classList.add("shrink")
</script>

<link rel="stylesheet" href="styles/shorts.css">


<div id="parrent_short_container">
   <div id="short_container">
      <div class="short active">
         <h1>Item 1</h1>
         <img src="images/chad-montano-lP5MCM6nZ5A-unsplash 1.png">
      </div>
      <div class="short">
        <h1>Item 2</h1>
         <img src="images/odiseo-castrejon-1SPu0KT-Ejg-unsplash 1.png">
      </div>
      <div class="short">
         <h1>Item 3</h1>
         <img src="images/placeholder.svg">
      </div>
   </div>

   <div id="recepy">
  <h2>Chocolate Chip Cookies</h2>
  <p>Soft, chewy, and full of flavor — these cookies are perfect with a glass of milk. Ready in just 25 minutes!</p>
  <ul>
    <li>200g flour</li>
    <li>100g butter</li>
    <li>75g sugar</li>
    <li>1 egg</li>
    <li>Chocolate chips</li>
  </ul>
</div>


<div id="button_container">
        <div id="favroute" class="short_button" onclick="heart()">
            <img src="images/heart_unfilled.png" alt="Favorite">
        </div>
    
        <div id="info" class="short_button" onclick="toggle_recepy_window()">
            <img src="images/recepy.png" on alt="Info">
        </div>
</div>
</div>

<script src="js/shorts.js"></script>