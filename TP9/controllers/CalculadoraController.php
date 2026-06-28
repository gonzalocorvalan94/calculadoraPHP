<?php

require_once './operaciones/Operaciones.php';
require_once './utils/menues.php';
require_once './utils/pedirNumero.php';
require_once './utils/limpiarConsola.php';

class CalculadoraController
{
    public function iniciar(): void
    {
        $encendido = true;

        while ($encendido) {
            menuPrincipal();

            $opcionElegida = (int) fgets(STDIN);

            $this->ejecutarOperacion($opcionElegida);

            if ($opcionElegida == 5) {
                $encendido = false;
            } else {
                $encendido = menuDecision();
            }
        }
    }

    private function crearCalculadora(): Operaciones
    {
        $n1 = pedirNumero("Ingrese el primer número: ");
        $n2 = pedirNumero("Ingrese el segundo número: ");

        return new Operaciones($n1, $n2);
    }

    private function ejecutarOperacion(int $opcionElegida): void
    {
        switch ($opcionElegida) {

            case 1:
                $calculadora = $this->crearCalculadora();
                echo "Resultado de la suma: {$calculadora->suma()}\n";
                break;

            case 2:
                $calculadora = $this->crearCalculadora();
                echo "Resultado de la resta: {$calculadora->resta()}\n";
                break;

            case 3:
                $calculadora = $this->crearCalculadora();
                echo "Resultado de la multiplicación: {$calculadora->multiplicacion()}\n";
                break;

            case 4:
                $calculadora = $this->crearCalculadora();
                echo "Resultado de la división: {$calculadora->division()}\n";
                break;

            case 5:
                echo "Hasta luego.\n";
                break;

            default:
                echo "Opción no válida.\n";
        }
    }
}
