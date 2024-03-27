<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini Twitter</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php require_once 'layouts/menu.html'; ?>
        <section class="feed">
            <form id="tweetForm">
                <textarea placeholder="Quoi de neuf ?"></textarea>
                <button type="submit">Tweeter</button>
            </form>
            <?php foreach($skills as $skill) : ?>
                <?php if ($skill["acquise"] = true ) : ?>
                    <li class="success"> Le skill <?php echo $skill["name"] ?> est acquis.</li>
                <?php else : ?>
                    <li class="danger"> Le skill <?php echo $skill["name"] ?> n'est acquis.</li>
                <?php endif ?>
            <?php endforeach ?>
            <div class="tweets">
                <!-- Les tweets seront ajoutés ici -->
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
