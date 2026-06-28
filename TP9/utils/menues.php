<?php

function menuPrincipal(): void
{
    $opciones = [
      "Indique la operación que desea realizar:\n \n",
      "1. Suma\n",
      "2. Resta\n",
      "3. Multiplicación\n",
      "4. División\n",
      "5. Salir\n"
    ];

    foreach ($opciones as $opcion) {
        echo $opcion;
    }
}

function menuContinuar(): void
{
    $opciones = [
        "¿Desea realizar otra operación?\n",
        "1. Sí\n",
        "2. No\n"
    ];

    foreach ($opciones as $opcion) {
        echo $opcion;
    }
}

function menuDecision(): bool
{
    while (true) {
        menuContinuar();

        $opcion = (int) fgets(STDIN);

        switch ($opcion) {
            case 1:
                limpiarConsola();
                return true;

            case 2:
                echo "Hasta luego";
                return false;

            default:
                echo "\nOpción inválida. Intente nuevamente.\n\n";
        }
    }
}
