<pre>

<?php

require_once "Caneta.php";


$c1 = new Caneta("BIC","Azul", 0.5);
$c2 = new Caneta("BIC NOVA", "Verde", 1.0);


//print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
print_r($c1);
print_r($c2);


?>
    </pre>
