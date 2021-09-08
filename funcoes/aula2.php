<?php

function teste ($x) {
    $x = $x + 2;
    echo "$x<br>";
}

    $a = 3;
    teste ($a);
    echo "$a<br>";


    function teste1 (&$x){
        $x = $x + 2;
        echo  $x;
    }
    $a = 3;
    teste1 ($a);
echo "$a<br>";
