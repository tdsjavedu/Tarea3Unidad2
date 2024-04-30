<?php

function hacerFact($a, $b, $c) {
    $de = $c * (10 / 100);
    $st = $c - $de;
    $iva = $st * 0.12;
    $t = $st + $iva;
    
    $resultado = "FACTURA\n";
    $resultado .= "Nombre: $a\n";
    $resultado .= "Productos:\n";
    foreach ($b as $b1) {
        $resultado .= "- $b1\n";
    }
    $resultado .= "Total: \$$t\n";

    // Devuelve la factura
    return $resultado;
}

// Datos del cliente y los productos comprados
$z = "Juan";
$y = ["Camisa", "Pantalón", "Zapatos"];
$x = 1000;

$fa = haceFact($z, $y, $x);

echo $fa;

?>
