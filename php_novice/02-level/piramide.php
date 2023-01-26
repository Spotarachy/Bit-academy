<?php

function pypart($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j <= $i; $j++) { 
            echo"* "; 
        } 
        echo PHP_EOL;
    }
}
$n = readline("wat is je getal?");
pypart($n);

?>
