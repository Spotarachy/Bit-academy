<?php

$tijden = (array) $argv[1];
$totalSeconds = 0;

foreach ($tijden as $value) {
    $typeTijd = substr($value, -1, 1);
    switch ($typeTijd) {
        case 'd':
            $totalSeconds += (int) $value * 24 * 60 * 60;
            break;
        case 'u':
            $totalSeconds += (int) $value * 60 * 60;
            break;
        case 'm':
            $totalSeconds += (int) $value * 60;
            break;
        case 's': 
            $totalSeconds += (int) $value;
            break;
    }
}

echo $totalSeconds . " seconden\n";

?>
