<?php
$a = isset($_GET['ano'])?$_GET['ano']:1900;
$i = date("Y") - $a;
echo "Você nasceu em $a e tem $i<br><br>";

if($i<16){
    $tipoVoto = "você não vota";
//    $d = "já pode dirigir";

}
elseif ($i>=16 && $i<18 || ($i>65)){
        $tipoVoto ="seu voto é opcional";
    }
    else {
    $tipoVoto ="seu voto é obrigatório";

    }
//    $v = "não pode votar";
//    $d = "não pode dirigir";


echo "Com essa idade <b>$tipoVoto</b>";
?>
<br><br><br>
<a href="index.html">Voltar</a>
