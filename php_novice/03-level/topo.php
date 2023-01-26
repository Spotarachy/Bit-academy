<?php

$topography = [
    'Japan' => "Tokyo",
    'Mexico' => "Mexico-Stad",
    'USA' => "Washington D.C.",
    'India' => "New Delhi",
    'Zuid-korea' => "Seoul",
    'China' => "Peking",
    'Nigeria' => "Abuja",
    'Argentinië' => "Buenos Aires",
    'Egypte' => "Cairo",
    'Engeland' => "Londen",
];

$score = 0;

foreach ($topography as $land => $stad) {
    $antwoord = readline("Welke hoofdstad heeft $land" . PHP_EOL);

    if ($antwoord == $stad) {
        echo "Correct!" . PHP_EOL;
        $score++;
    } else {
        echo "Helaas, $antwoord is niet enn hoofdstad in het $land." . PHP_EOL;
        echo "Hetcorrecteantwoord is: $stad" . PHP_EOL;
    }
}

echo "Je hebt $score van de " . count($topography) . " goed geraden." . PHP_EOL;

?>