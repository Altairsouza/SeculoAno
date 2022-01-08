<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função SeculoAno</title>
</head>

<body>
<?php

echo $seculoAno = seculoAno('1850');
echo "<hr>";
echo $seculoAno = seculoAno('1700');

function seculoAno($ano)
{
    if ($ano < 1) {
        return "Ano inválido";
    } else if ($ano == 1) {
        return "Século I";
    }
    $calc = (($ano - 2) / 100) + 1;

    $seculo = explode(".", $calc);

    return  "Ano " . $ano . " - Século " . $seculo[0];
}
?>

</body>

</html>