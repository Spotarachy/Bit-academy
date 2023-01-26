<?php

$blokken = readline('Hoeveel blokken heb je? ');
$rijen = 0;
while ($blokken > 0) {
        $blokken = $blokken - $rijen - 1;
        $rijen++;
        echo 'rijen ' . $rijen . PHP_EOL;
        echo  'blokken ' . $blokken . PHP_EOL;
}
if ($blokken < 0) {
    echo $rijen - 1;
} else {
    echo $rijen;
}

?>
