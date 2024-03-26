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
            <form id="tweetForm">
                <textarea placeholder="Quoi de neuf ?"></textarea>
                <button type="submit">Tweeter</button>
            </form>
            <ul>
            <!-- Créer une boucle avec des li pour chaque skills, si acquis j'affiche une classe success sinon danger.

            La valeur de mon LI doit etre le nom de la compétence. -->
            </ul>
            <div class="tweets">
                <!-- Les tweets seront ajoutés ici -->
                <!-- CONVERTIR CE CODE AVEC LA NOUVELLE MANIÈRE D'ÉCRIRE DU PHP DANS UN FICHIER HTML;

                Ne pas mettre du html en chaine de caractère dans un echo comme cet exemple -->
                <?php
                    echo "<h3>$nombreTweets tweet(s) de $user</h3>";

                    for ($i = 0; $i < $nombreTweets; $i++) {
                        echo "<div class='tweet'>Tweet " . ($i + 1) . " de $user</div>";
                    }
                ?>
            </div>
        </section>
    </div>
</body>
</html>
