        <?php foreach ($tweets as $tweet) : ?>
                    <div class="tweet">
                        <h1 style="margin-top: 0;">
                            <?= $tweet['author'] ?? "Utilisateur inconnu" ?>
                        </h1>
                        <?= $tweet['message'] ?> 
                        <form action="action.php" method="POST">
                            <input type="hidden" name="message" value="<?= $tweet['message'] ?>">
                            <?php if(!empty($user) && !empty($tweet['author']) && $user === $tweet['author']) : ?>
                                <button type="submit" class="delete-button">Supprimer</button>
                            <?php endif; ?>
                        </form>
                    </div>
                <?php endforeach; ?>