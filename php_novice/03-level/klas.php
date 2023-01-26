<?php

$klas = readline("Wie zit er in je klas? ");

  $array = explode(" ", $klas);

foreach ($array as $value) {
    echo "De studenten in de klas zijn", $value . PHP_EOL;
}

?>