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

    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/admin.css">
</head>
<body>
    <?php include './header.php'; ?>

    <div class="admin-shell">
        <aside class="admin-sidebar" aria-label="Admin navigatie">
            <div class="sidebar-top">
                <img src="../images/logo.png" alt="CookUp" class="sidebar-logo">
                <h3 class="sidebar-title">Admin Paneel</h3>
            </div>

            <nav class="sidebar-nav">
                <ul>
                    <li class="sidebar-link active" data-target="users-section" id="users-section">
                        <span class="icon">👥</span><span class="label">Gebruikers</span>
                    </li>
                    <li class="sidebar-link" data-target="recipes-section" id="recipes-section">
                        <span class="icon">🍽️</span><span class="label">Recepten</span>
                    </li>
                </ul>
            </nav>

            <div class="sidebar-bottom">
                <a href="../includes/logout.inc.php" class="sidebar-logout">Logout</a>
            </div>
        </aside>

        <main class="admin-main">
            <div class="wrapper">
                <h1 id="headerTable">Gebruikers</h1>

                <table id="usersTable">
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
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $item): ?>
                            <tr>
                                <td><?= htmlspecialchars($item['usersId']) ?></td>
                                <td><?= htmlspecialchars($item['usersName']) ?></td>
                                <td><?= htmlspecialchars($item['usersEmail']) ?></td>
                                <td><?= htmlspecialchars($item['usersUid']) ?></td>
                                <td><?= htmlspecialchars($item['role']) ?></td>
                                <td class="actieknoppen">
                                    <a href="../admin/admin_users/bewerkpage/bewerk.php?id=<?=urlencode($item['usersId'])?>" class="btn btn-bewerken">Bewerken</a>
                                    <a href="../admin/admin_users/verwijderpage/verwijderen.php?id=<?=urlencode($item['usersId'])?>" class="btn btn-verwijderen">Verwijderen</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="7">Geen gebruikers gevonden.</td></tr>
                    <?php endif; ?>
                    </tbody>
                </table>

                <table id="recipesTable">
                    <thead>
                    <tr>
                        <th>recipeId</th>
                        <th>usersId</th>
                        <th>title</th>
                        <th>description</th>
                        <th>categoryId</th>
                        <th>createdAt</th>
                        <th>updatedAt</th>
                        <th>Acties</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if (!empty($recipes)): ?>
                        <?php foreach ($recipes as $item): ?>
                            <tr>
                                <td><?= htmlspecialchars($item['recipeId']) ?></td>
                                <td><?= htmlspecialchars($item['usersId']) ?></td>
                                <td><?= htmlspecialchars($item['title']) ?></td>
                                <td><?= htmlspecialchars($item['description']) ?></td>
                                <td><?= htmlspecialchars($item['categoryId']) ?></td>
                                <td><?= htmlspecialchars($item['createdAt']) ?></td>
                                <td><?= htmlspecialchars($item['updatedAt']) ?></td>
                                <td class="actieknoppen">
                                    <a href="../admin/admin_recipes/bewerkpage/bewerk.php?id=<?=urlencode($item['recipeId'])?>" class="btn btn-bewerken">Bewerken</a>
                                    <a href="../admin/admin_recipes/verwijderpage/verwijderen.php?id=<?=urlencode($item['recipeId'])?>" class="btn btn-verwijderen">Verwijderen</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr><td colspan="7">Geen gebruikers gevonden.</td></tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>


</body>
<script src="../js/header.js"></script>
<script src="../js/admin.js"></script>
</html>

