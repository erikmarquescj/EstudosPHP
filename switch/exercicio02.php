<?php

$d = isset($_GET["ds"])?$_GET["ds"]:0;


switch ($d){
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo "Levanta e vai trabalhar! :)";
        break;
    case 7:
    case 8:
        echo "Bora descansar ;)";
        break;
    default:
        echo "Dia da semana inválido";
}
?>

<br/><br/><a href="javascript:history.go(-1)">Voltar</a>
