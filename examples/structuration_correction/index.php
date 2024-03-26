<?php

// Récupération des paramètres GET 'user' et 'tweets'
$user = isset($_GET['user']) ? $_GET['user'] : 'Utilisateur inconnu';
$nombreTweets = isset($_GET['tweets']) ? (int)$_GET['tweets'] : 1;

require_once 'index.html.php';