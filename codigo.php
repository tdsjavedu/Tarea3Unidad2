<?php

function hacerFactura($nombreCliente, $productos, $montoTotal) {
    // Validaciones de entrada
    if (empty($nombreCliente)) {
        return "Error: El nombre del cliente no puede estar vacío.";
    }
    if (!is_array($productos) || empty($productos)) {
        return "Error: Debe proporcionar al menos un producto.";
    }
    if (!is_numeric($montoTotal) || $montoTotal <= 0) {
        return "Error: El monto total debe ser un número positivo.";
    }


 
