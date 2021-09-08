<?php

function soma(){
    $p = func_get_args();
    $tot = func_num_args();
    $s = 0;
    for ($i =0; $i <$tot; $i++){
        $s = $s +$p[$i];

    }
    return $s;
}

$r = soma(3, 5, 2, 20);
echo  "A soma dos valores é $r";


