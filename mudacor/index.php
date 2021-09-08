<?php
//$idade = [
//        "João Gomes" => "35",
//        "Maria Pires" => "30",
//        ];
//
//print_r ($idade);
//
//?>
<!--<br><br>-->
<!---->
<?php
//
//echo "João Gomes tem " . $idade['João Gomes'] . " anos. <br>" ;
//echo "Maria Pires tem " . $idade['Maria Pires'] . " anos. <br><br>";
//
//echo "A diferença entre idades deles é de " . $idade['João Gomes'] - $idade['Maria Pires'] . " anos.";
//?>

<?php
//
//$preco = $_GET ["p"];
//echo "O preço do produto é R$ " .number_format($preco, 2);
//$preco += ($preco*10/100);
//
//echo "<br>O novo preço com 10% de aumento é R$  " .number_format($preco, 2);
//

//$atual = $_GET["aa"];
//echo "O ano atual é $atual e o próximo ano será " . ++$atual;
//
//$x = "abc";
//$$x = "def";
//
//echo "O conteúdo da variavel X é $x";
//echo "<br> O conteúdo da variavel abc é $abc"
//$n1 = $_GET["a"];
//$n2 = $_GET ["b"];
////$tipo = $_GET ["op"];
////
////echo "Os valores passados foram $n1 e $n2 <br/>";
//
//$r1 = ($n1 <= $n2) ? "O primeiro número é menor":"O primeiro número é maior";
//
//echo "Resposta:  $r1";

$ano =$_GET ["an"];
$idade = 2021 - $ano;
echo "Quem nasceu em $ano tem idade de $idade anos.";
$tipo = ($idade>=18 && $idade<=65)? "pode tomar vacina" : "não pode tomar vacina";

echo "<br> E dessa forma $tipo";

?>