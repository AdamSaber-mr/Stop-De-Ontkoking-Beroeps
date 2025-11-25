<?php
 session_start();
?>

<?php
$categories = [
    1 => "Breakfast",
    2 => "Lunch",
    3 => "Dinner",
    4 => "Snacks",
];

$random_id = rand(1, 4);

$category_name = $categories[$random_id];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cook Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
<div id="header">
    <div id="logo-container">
        <img id="logo" src="images/logo.png" alt="Logo">
    </div>

    <h1 id="site-title">Cook up</h1>

    <ul id="nav-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="overview.php?catogory_id=<?= $random_id; ?>&catogory_name=<?= $category_name; ?>">Browse</a></li>
        <li><a href="shorts.php">Watch</a></li>
    </ul>

    <div id="account-section">
     <?php
     if (isset($_SESSION['useruid'])) {
         ?>
         <div id="account">
             <img src="images/user_placeholder.png" alt="User">
         </div>
         <?php
     } else {
         echo "<button id='login-btn' onclick=\"window.location.href='login.php'\">Login</button>";
         echo "<button id='signup-btn' onclick=\"window.location.href='signup.php'\">Sign Up</button>";
     }
     ?>
    </div>
</div>

<div id="mobile-header">
    <img id="logo" src="images/logo.png" alt="Logo">
    <div class="header_hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<div id="side_menu">
    <div class="header_hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    
    <ul class="nav-menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="overview.php?catogory_id=<?= $random_id; ?>&catogory_name=<?= $category_name; ?>">Browse</a></li>
        <li><a href="shorts.php">Watch</a></li>
        <?php
        if (!isset($_SESSION['useruid'])) {
            echo "<li><a href='login.php'>Login</a></li>";
            echo "<li><a href='signup.php'>Sign Up</a></li>";
        }
        ?>
    </ul>
</div>



<ul id="header_ul">
    <li><a href="includes/logout.inc.php">Logout</a></li>
</ul>

<script>
const hamburgers = document.querySelectorAll('.header_hamburger');
const sideMenu = document.getElementById('side_menu');
const mobileQuery = window.matchMedia("(max-width: 768px)");

hamburgers.forEach(hamburger => {
    hamburger.addEventListener('click', () => {
        sideMenu.classList.toggle('show');
        hamburger.classList.toggle('open'); 
    });
});

document.addEventListener('pointerdown', (event) => {
  if (!mobileQuery.matches) return;

  const isHamburger = event.target.closest('.header_hamburger');
  const isInsideMenu = event.target.closest('#side_menu');

  if (!isHamburger && !isInsideMenu) {
    sideMenu.classList.remove('show');
  }
});
</script>