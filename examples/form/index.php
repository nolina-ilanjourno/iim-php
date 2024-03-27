<?php

$skills = [
    ["nom" => "PHP", "acquise" => true],
    ["nom" => "JavaScript", "acquise" => false],
    ["nom" => "HTML", "acquise" => true],
    ["nom" => "CSS", "acquise" => false],
    ["nom" => "SQL", "acquise" => true]
];

// Récupération des paramètres GET 'user' et 'tweets'
$user = isset($_GET['user']) ? $_GET['user'] : 'Utilisateur inconnu';
$nombreTweets = isset($_GET['tweets']) ? (int)$_GET['tweets'] : 1;

require_once 'index.html.php';