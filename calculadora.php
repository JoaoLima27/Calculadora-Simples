<?php

$n1 = $_POST ["n1"];
$n2 = $_POST ["n2"];
$sinal = $_POST ["sinal"];

if ($sinal == "+") {
    $resultado = $n1 + $n2;
    echo "O resultado do cálculo $n1 $sinal $n2 é $resultado";
}
elseif ($sinal == "-") {
    $resultado = $n1 - $n2;
    echo "O resultado do cálculo $n1 $sinal $n2 é $resultado";
}
elseif ($sinal == "*") {
    $resultado = $n1 * $n2;
    echo "O resultado do cálculo $n1 $sinal $n2 é $resultado";
}
else {
    $resultado = $n1 / $n2;
    echo "O resultado do cálculo $n1 $sinal $n2 é $resultado";
}
