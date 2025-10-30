<?php
include_once './header.php';
?>

    <div class="wrapper">

        <section class="index-intro">

            <?php
            if (isset($_SESSION['useruid'])) {
                echo "<p>Hello There " . $_SESSION['useruid'] . "</p>";
            }
            ?>

            <h1>This is an introduction</h1>
            <p>Here is a important message that explains the website</p>
        </section>

        <section class="index-categories">
            <h2>Some Basic Categories</h2>
            <div class="index-categories-list">
                <div>
                    <h3>Ontbijt</h3>
                </div>
                <div>
                    <h3>Lunch</h3>
                </div>
                <div>
                    <h3>Tussendoor</h3>
                </div>
                <div>
                    <h3>Avond Eten</h3>
                </div>
            </div>
        </section>

<?php
    include_once './footer.php';
?>