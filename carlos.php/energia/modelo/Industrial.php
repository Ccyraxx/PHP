<?php

class Industrial implements IConsumidorEnergia{

    private float $cobrar = 1.80;
    private float $cobrar1 = 2.30;
    private float $consumo;
    
    public function ValorFatura(){
        if ($this->consumo <= 500) {
            $valor = $this->consumo * $this->cobrar;
            return $valor;
            
            $valor1 = 100 * $this->cobrar;
            $valor2 = ($this->consumo - 100) * $this->cobrar1;
            return $resultado = $valor1 + $valor2;

        }
    }

    public function getconsumo(): float{
        return $this->consumo;
    }
    public function setconsumo(): float{
        return $this->consumo = $consumo;
    }
}