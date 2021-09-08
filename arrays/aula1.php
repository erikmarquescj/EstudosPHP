<pre>
<?php

$n = array(3,5,8,2);
$n[] = 7;
print_r($n);

$c = range(4,20,2);
//print_r($c);

foreach($c as $v) {
    echo "$v ";
}
?>
    </pre>

<pre>
    <?php

    $v = array(3 =>5,
               1 =>9,
               2=>8,
                7=>7
        );
    $v[] = "E";
    unset ($v[2]);
    print_r($v);

    ?>
</pre>

<pre>
    <?php
    $cad = array(
        "nome"=>"Erik",
        "idade"=>36,
        "peso"=>78.5

    );
   foreach ($cad as $campo => $valor){

       echo "O valor de $campo é $valor <br>";

   }


    ?>


</pre>
