<?php

require './operaciones/Operaciones.php';
include './controllers/ejecutarOperacion.php';
include_once './utils/menues.php';
require_once './utils/limpiarConsola.php';
require_once './utils/pedirNumero.php';


function iniciarCalculadora(): void
{
    $encendido = true;

    while ($encendido) {
        menuPrincipal();

        $opcionElegida = (int)fgets(STDIN);

        ejecutarOperacion($opcionElegida);

        if ($opcionElegida == 5) {
            $encendido = false;
        } else {
            $encendido = menuDecision();
        }
    }
}
