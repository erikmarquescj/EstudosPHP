<?php
//Captura os dados enviados via formulário ou coloca os dados padrões
$start = isset($_GET["in"])?$_GET["in"]:1;
$end = isset($_GET["fn"])?$_GET["fn"]:10;
$incremento = isset($_GET["inc"])?$_GET["inc"]:1;

//Inicia a contagem e exibe na tela
//Contagem Crescente
while ($start <= $end){
    echo "{$start} <br>";
    $start+=$incremento;
}
//Contagem Decrescente
while ($start >= $end){
    echo "{$start} <br>";
    $start-=$incremento;
}
?>
<br/><br/><a href="javascript:history.go(-1)">Voltar</a>





