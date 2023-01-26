<?php

$calc = readline('Welke operatie wil je uitvoeren? (+,-,%) ');

if ($calc !== '+' && $calc !== '-' && $calc !== '%') {
    exit('geen geldige operatie');
}

$getal1 = readline('Je eerste getal?');
if (!is_numeric($getal1)) {
    exit($getal1 . ' geen nummer ');
}

$getal2 = readline('Je eerste getal?');
if (!is_numeric($getal2)) {
    exit($getal2 . ' geen nummer ');
}

if ($calc == '-') {
    echo $getal1 - $getal2;
} else if ($calc == '%') {
    echo $getal1 % $getal2;
} else if ($calc == '+') {
    echo $getal1 + $getal2; 
}

?>