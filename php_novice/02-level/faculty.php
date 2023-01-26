<?php

function Faculteit($nummer) 
{
    $faculteit = 1;
    for ($i = 1; $i <= $nummer; $i++) {
        $faculteit = $faculteit * $i;
    }
    return $faculteit;
}

$nummer = readline("van welk getal wil je de faculteit weten?");
$fact = Faculteit($nummer);
echo "Faculteit = $fact";

?>
