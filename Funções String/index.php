<?php

$prod = "leite";
$preco = 4.5;

printf("O %s custa R$ %.2f<br><br><br>", $prod, $preco);


$x[0] = 4;
$x[1] = 3;
$x[2] = 8;
print_r($x);
echo "<br>";
var_dump($x);
echo "<br>";
var_export($x);

echo "<br>";

$t = "Aqui temos um texto gigante para conhecer uma nova função de texto do php";
$r = wordwrap($t, 10, "<br>");
echo $r;

echo "<br>";
echo "<br>";

$frase = "Eu vou estudar php";
$cont = str_word_count($frase, 0);
echo $cont;


echo "<br>";
echo "<br>";

$texto = "Erik";
$novo = str_pad($texto, 50, ".", STR_PAD_RIGHT);
$novo1 = str_pad($texto, 50, '.', STR_PAD_BOTH);
$novo2 = str_pad($texto, 50, ".", STR_PAD_LEFT);

print("Meu nome é $novo e é lindo pra xuxu.");
echo "<br>";
print("Meu nome é $novo1 e é lindo pra xuxu.");
echo "<br>";
print("Meu nome é $novo2 e é lindo pra xuxu.");