<html>
<head>
    <title>Aula Orientação Objetos</title>

</head>

<body>
<pre>
<?php

    require_once 'Caneta.php';
    $c1 = new Caneta;
    $c1->cor ="Azul";
    $c1 ->modelo ="BIC Cristal";

   print_r($c1);

?>
    </pre>
</body>
</html>