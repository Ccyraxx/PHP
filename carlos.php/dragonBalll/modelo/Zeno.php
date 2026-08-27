<?php

class Zeno implements Iguerreiro{

    private int $zeno = 0;
    private array $ataques;

    public function atacar(): string{
        $ataqueAleatorio = $ataques[array_rand($ataques)];

        return "\nZeno ussou o " . $ataqueAleatorio . "\n";
    }
    public function transformar(): string{
        return "\nZeno não possuir uma transfomação!\n";
    }  

    public function getataques(): float{
        return $this->ataques;
    }
    public function setataques(): float{
        return $this->ataques = $ataques;
    }
}