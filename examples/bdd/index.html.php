<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini Twitter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Explorer</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Profil</a></li>
            </ul>
        </nav>
        <section class="feed">
            <?php if(!empty($user)): ?>
                <h3>Je suis <?= $user ?></h3>
            <?php endif; ?>
            <form id="tweetForm" action="action.php" method="POST">
                <?php if(!empty($user)): ?>
                    <input type="hidden" name="user" value="<?= $user ?>">
                <?php endif; ?>
                <textarea placeholder="Quoi de neuf ?" name="message"></textarea>
                <button type="submit">Tweeter</button>
            </form>
            <ul>
            <!-- Créer une boucle avec des li pour chaque skills, si acquis j'affiche une classe success sinon danger.

            La valeur de mon LI doit etre le nom de la compétence. -->
            </ul>
            <div class="tweets">
                <!-- Les tweets seront ajoutés ici -->
        
            </div>
        </section>
    </div>
</body>
</html>
