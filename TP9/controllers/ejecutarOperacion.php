<?php

require_once './utils/pedirNumero.php';

function ejecutarOperacion(int $opcionElegida): void
{
    switch ($opcionElegida) {
        case 1:
            $n1 = pedirNumero("Ingrese el primer número: ");
            $n2 = pedirNumero("Ingrese el segundo número: ");

            $calculadora = new Operaciones($n1, $n2);
            echo "Resultado de la suma: {$calculadora->suma()}\n";
            break;

        case 2:
            $n1 = pedirNumero("Ingrese el primer número: ");
            $n2 = pedirNumero("Ingrese el segundo número: ");

            $calculadora = new Operaciones($n1, $n2);
            echo "Resultado de la resta: {$calculadora->resta()}\n";
            break;

        case 3:
            $n1 = pedirNumero("Ingrese el primer número: ");
            $n2 = pedirNumero("Ingrese el segundo número: ");

            $calculadora = new Operaciones($n1, $n2);
            echo "Resultado de la multiplicación: {$calculadora->multiplicacion()}\n";
            break;

        case 4:
            $n1 = pedirNumero("Ingrese el primer número: ");
            $n2 = pedirNumero("Ingrese el segundo número: ");

            $calculadora = new Operaciones($n1, $n2);
            echo "Resultado de la división: {$calculadora->division()}\n";
            break;

        case 5:
            echo "Hasta luego.\n";
            break;

        default:
            echo "Opción no válida. Intente de nuevo.\n";
            break;
    }
}
