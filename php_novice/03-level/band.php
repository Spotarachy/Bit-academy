<?php

$albums = ["Citizen of Glass" => 4.50, "Night" => 9, "New Eyes" => 5, "Strange Trails" => 10];

$total = 0;

echo "Het albumoverzicht: " . PHP_EOL;
foreach ($albums as $name => $price) {
    echo "$name kost €$price" . PHP_EOL;
    $total += $price;
}

echo "Het totaalbedrag van alle albums is €$totaal" . PHP_EOL;
echo "De gemiddelde prijs van alle albums is €" . $total / count($albums) . PHP_EOL;

?>
