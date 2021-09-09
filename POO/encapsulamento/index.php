<html>
<head>
    <title>Encapsulamento PHP</title>
</head>
<body>

<h2>Projeto Contole Remoto</h2>
<pre>
<?php
require_once "ControleRemoto.php";
$c = new ControleRemoto();
$c->ligar();
$c->maisVolume();
//$c->maisVolume();
$c->abrirMenu();

?>
</pre>

</body>
</html>