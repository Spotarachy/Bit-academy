<?php

$invoer = (int) readline('Hoeveel vrienden zou ik vragen om hun droom?' . PHP_EOL);
$amountFriends = $invoer;
if ($amountFriends == 0) {
    echo "'$invoer' is geen geldig getal, probeer het opnieuw ";
    exit();
}

$dreams = [];
foreach (range(1, $amountFriends) as $friend) {
    $name = readline('Wat is jouw naam?' . PHP_EOL);
    $dreams[$name] = [];
        $dream = readline('Wat is jouw droom? ' . PHP_EOL);
        $dreams[$name][] = $dream;
}

foreach ($dreams as $name => $item) {
    echo "$name heeft dit als droom: ";
    foreach ($item as $total) {
        echo $total . PHP_EOL;
    }
    echo PHP_EOL;
}

?>
