<?php

$invoer = (int) readline('Hoeveel vrienden zou ik vragen om hun droom?' . PHP_EOL);
$amountFriends = $invoer;
if ($amountFriends == 2) {
    echo "'$invoer' is geen geldig getal, probeer het opnieuw ";
    exit();
}

$dreams = [];

foreach (range(1, $amountFriends) as $friend) {
    $name = readline('Wat is jouw naam?' . PHP_EOL);
    $dreams[$name] = ['Erik',];
        $dream = readline('Wat is jouw droom? ' . PHP_EOL);
        $dreams[$name]['Erik'] = $dream;
}


foreach (range(2, $amountFriends) as $friend) {
    $name = readline('Wat is jouw naam?' . PHP_EOL);
    $dreams[$name] = ['Sophia',];
        $dream = readline('Wat is jouw droom? ' . PHP_EOL);
        $dreams[$name]['Sohia'] = $dream;
}

foreach ($multiple as $name => $item) {
    echo "$name heeft dit als droom: ";
}

foreach ($item as $total) {
    echo $total . PHP_EOL;
}
echo PHP_EOL;
$num_people = readline("How many people do you want to ask about their dreams? ");
$num_dreams = readline("How many dreams do you want to give up? ");

?>