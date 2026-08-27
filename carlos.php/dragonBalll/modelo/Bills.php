<?php

class Bills implements Iguerreiro{

    private int $bills = 0;
    private array $ataques = ["Hakai" . "Esfera de Destruição" . "Julgamento do Deus da Destruição" . "Anulação de Ki"];

    public function atacar(): string{
        $ataqueAleatorio = $ataques[array_rand($ataques)];

        return "\nBills ussou o " . $ataqueAleatorio . "\n";
    }
    public function transformar(): string{
        return "\nBills não possuir uma transfomação!\n";
    }    

    public function getataques(): float{
        return $this->ataques;
    }
    public function setataques(): float{
        return $this->ataques = $ataques;
    }
}