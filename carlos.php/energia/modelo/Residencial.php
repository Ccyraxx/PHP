<?php

class Residencial implements IConsumidorEnergia{

    private float $cobrar = 1.05;
    private float $consumo;

    public function ValorFatura(){
        if ($this->consumo <= 100) {
            $valor = $this->consumo * $this->cobrar;
            return $valor;
        }
    }

    public function getconsumo(): float{
        return $this->consumo;
    }
    public function setconsumo(): float{
        return $this->consumo = $consumo;
    }
}