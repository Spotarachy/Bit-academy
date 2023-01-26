<?php

$n = readline("hoeveel activiteiten wil je aan je bucket list toevoegen? ");

if (!is_numeric($n)) {
    exit($n . " is geen getal, probeer het opnieuw.");
}

for ($i = 0; $i < $n; $i++) {
    $bucket_list[$i] = readline("Wat wil je toevoegen aan de bucket list? ");
}

echo ("Op jouw bucket list staan: ") . PHP_EOL;
for ($i = 0; $i < $n; $i++) {
    echo ($bucket_list[$i]) . PHP_EOL;
}

?>
