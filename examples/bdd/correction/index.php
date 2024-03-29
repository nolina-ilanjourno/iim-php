<?php

try {
    $database = new PDO('mysql:host=localhost;dbname=twitter', 'root', 'root');
        
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $skills = [
            ["nom" => "PHP", "acquise" => true],
            ["nom" => "JavaScript", "acquise" => false],
            ["nom" => "HTML", "acquise" => true],
            ["nom" => "CSS", "acquise" => false],
            ["nom" => "SQL", "acquise" => true]
        ];

        $user = isset($_GET['user']) ? $_GET['user'] : 'Utilisateur inconnu';
        $nombreTweets = isset($_GET['tweets']) ? (int)$_GET['tweets'] : 1;


        $request = $database->prepare("SELECT users.pseudo as author, tweets.* FROM tweets
        LEFT JOIN users ON tweets.author_id = users.id
        ORDER BY tweets.id DESC");
        $request->execute();
        $tweets = $request->fetchAll(PDO::FETCH_ASSOC);

        require_once 'index.html.php';
    } else {
        die('Méthode non autorisée');
    }
}catch(PDOException $e) {
    echo $e->getMessage();
}

