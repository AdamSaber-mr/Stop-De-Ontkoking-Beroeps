<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Cook Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../images/logo.png">

    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/admin.css">
</head>
<body>

<div id="header">
    <div id="logo-container">
        <img id="logo" src="../images/logo.png" alt="Logo">
    </div>

    <h1 id="site-title">Cook up</h1>

    <ul id="nav-menu">
        <li><a href="../index.php">Home</a></li>
        <li>Browse</li>
        <li>Watch</li>
    </ul>

    <div id="account-section">
        <?php
        if (isset($_SESSION['useruid'])) {
            if ($_SESSION['role'] === 'user') {
                echo "<li><a href='../admin/admin.php'>Profile page</a></li>";
                echo "<li><a href='../includes/logout.inc.php'>Log out</a></li>";
            }
            if ($_SESSION['role'] === 'admin') {
                echo "<li><a href='../admin/admin.php'>Admin page</a></li>";
                echo "<li><a href='../includes/logout.inc.php'>Log out</a></li>";
            }
        }
        else {
            echo "<li><a href='../signup.php'>Sign up</a></li>";
            echo "<li><a href='../login.php'>Login</a></li>";
        }
        ?>
    </div>
</div>

<div class="wrapper">
    <h1>Gebruikersbeheer</h1>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Gebruikersnaam</th>
            <th>Rol</th>
            <th>Acties</th>
        </tr>
        </thead>

        <tbody>
        <?php if (!empty($resultaten)): ?>
            <?php foreach ($resultaten as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['usersId']) ?></td>
                    <td><?= htmlspecialchars($item['usersName']) ?></td>
                    <td><?= htmlspecialchars($item['usersEmail']) ?></td>
                    <td><?= htmlspecialchars($item['usersUid']) ?></td>
                    <td><?= htmlspecialchars($item['role']) ?></td>
                    <td class="actieknoppen">
                        <a href="../bewerkpage/bewerk.php?id=<?=urlencode($item['usersId'])?>" class="btn btn-bewerken">Bewerken</a>
                        <a href="../verwijderpage/verwijder.php?id=<?=urlencode($item['usersId'])?>" class="btn btn-verwijderen">Verwijderen</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="7">Geen gebruikers gevonden.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
<script src="../js/header.js"></script>
</html>

