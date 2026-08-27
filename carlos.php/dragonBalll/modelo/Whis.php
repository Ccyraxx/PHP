<?php

class Whis implements Iguerreiro{

    private int $whis = 0;
    private array $ataques;

    public function atacar(): string{
        $ataqueAleatorio = $ataques[array_rand($ataques)];

        return "\nWhis ussou o " . $ataqueAleatorio . "\n";
    }
    public function transformar(): string{
        echo "\nWhis não possuir uma transfomação!\n";
        echo "MAS...";
        sleep(3);
        $deseja = readiline("Ele possir um estado de Espírito!\nDeseja usar?\n1-sim\n2-não\n");
        if ($deseja == 1) {
            echo "Whis alcançou o intito superior!\n";
            $this->whis = $whis++;
        }
    }  

    public function getataques(): float{
        return $this->ataques;
    }
    public function setataques(): float{
        return $this->ataques = $ataques;
    }
}