<?php

$getal = readline("Hoeveel landen ga je toeveoegen?") . PHP_EOL;

for ($x = 0; $x < $getal; $x++) {
    $land = readline("Welk lang ga toeveoegen ?");
    $stad = readline("Wat is de hoofstad van $land ?");
    $arry [$land] = $stad;
}

echo ("De volgende landen de steden zitten in de database: ") . PHP_EOL;

foreach ($arry as $land => $stad) {
    echo $land . " " . $stad . PHP_EOL;
}

?>