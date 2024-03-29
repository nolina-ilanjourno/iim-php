<?php 

try {
    $database = new PDO('mysql:host=localhost;dbname=twitter', 'root', 'root');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $redirect = 'Location: /index.php';

        if (isset($_POST['message']) && !empty($_POST['message'])) {
            $tweet = $_POST['message'];
            $userId = null;

            if (isset($_POST['user']) && !empty($_POST['user'])) {
                $user = $_POST['user'];
                $redirect = 'Location: /index.php?user=' . $user;
                // Préparez une requête pour insérer l'utilisateur et récupérer l'ID
                $request = $database->prepare("INSERT INTO users (pseudo) VALUES (:user) ON DUPLICATE KEY UPDATE id=LAST_INSERT_ID(id), pseudo=VALUES(pseudo)");
                $request->execute([':user' => $user]);
                $userId = $database->lastInsertId();
            }

            // Insérer le tweet avec l'ID de l'utilisateur
            if ($userId) {
                $request = $database->prepare("INSERT INTO tweets (message, author_id) VALUES (:tweet, :userId)");
                $request->execute([':tweet' => $tweet, ':userId' => $userId]);
            } else {
                // Si aucune ID d'utilisateur, insérer le tweet seul (ce cas pourrait être à revoir selon la logique souhaitée)
                $request = $database->prepare("INSERT INTO tweets (message) VALUES (:tweet)");
                $request->execute([':tweet' => $tweet]);
            }

          
        }

        header($redirect);
        exit();
    } else {
        die('Méthode non autorisée');
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
