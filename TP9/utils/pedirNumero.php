<?php

function pedirNumero(string $mensaje): float
{
    while (true) {
        echo $mensaje;

        $entrada = trim(fgets(STDIN));

        if (is_numeric($entrada)) {
            return (float) $entrada;
        }

        echo "Error: debe ingresar un número válido.\n";
    }
}