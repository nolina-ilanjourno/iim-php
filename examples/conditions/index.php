<?php

$skills = [
    ["nom" => "PHP", "acquise" => true],
    ["nom" => "JavaScript", "acquise" => false],
    ["nom" => "HTML", "acquise" => true],
    ["nom" => "CSS", "acquise" => false],
    ["nom" => "SQL", "acquise" => true]
];

$user = isset($_GET['user']) ? $_GET['user'] : 'Utilisateur inconnu';
$nombreTweets = isset($_GET['tweets']) ? (int)$_GET['tweets'] : 1;

require_once 'index.html.php';

foreach ($skills as $skill) {
    echo $skill['nom'] . ' : ' . ($skill['acquise'] ? 'acquise' : 'non acquise') . '<br>';
}

foreach ($skills as $skill) :
    if($skill['acquise']) :
        echo $skill['nom'] . ' : acquise<br>';
    else :
        echo $skill['nom'] . ' : non acquise<br>';
    endif;
endforeach;