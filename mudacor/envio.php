<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário de envio</title>
    <?php
    //Retorna os valores enviados pelo formulário, caso não tiver exibe valores padrão
    $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="utf-8">
    <style>
        span.texto {
            font-size: <?= $tam ?>;
            color: <?= $cor ?>;
        }

    </style>
</head>
<body>
<?php
//Exibe o texto enviado dentro da página
echo "<span class='texto'>$txt</span>";
?>
<br/><br/>
<a href="form.html">Voltar</a>
</body>
</html>





