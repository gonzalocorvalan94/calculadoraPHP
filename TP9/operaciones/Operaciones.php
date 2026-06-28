<?php

class Operaciones
{
    private float $num1;
    private float $num2;

    public function __construct(float $num1, float $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function suma()
    {
        return $this->num1 + $this->num2;
    }

    public function resta()
    {
        return $this->num1 - $this->num2;
    }

    public function multiplicacion()
    {
        return $this->num1 * $this->num2;
    }

    public function division()
    {
        if ($this->num2 == 0) {
            return "Error: No se puede dividir por 0";
        }
        return $this->num1 / $this->num2;
    }
}
