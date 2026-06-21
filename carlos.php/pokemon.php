<?php

class Pokemon {
    private $nome;
    private $tipo;
    private $nivel;
    private $experiencia;
    private $pontosVida;
    private $ataque;
    private $defesa;
    private $velocidade;

    public function __construct($nome, $tipo, $nivel, $pontosVida, $ataque, $defesa, $velocidade) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->nivel = $nivel;
        $this->experiencia = 0;
        $this->pontosVida = $pontosVida;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->velocidade = $velocidade;
    }

    public function batalhar(Pokemon $oponente) {
        echo "$this->nome está batalhando contra $oponente->nome!\n";

        $dano = $this->ataque - $oponente->defesa;
        if ($dano < 0) $dano = 0;

        $oponente->pontosVida -= $dano;
        echo "$this->nome causou $dano de dano em $oponente->nome!\n";

        if ($oponente->pontosVida <= 0) {
            echo "$oponente->nome foi derrotado!\n";
            $this->ganharExperiencia(50);
        }
    }

    public function ganharExperiencia($quantidade) {
        $this->experiencia += $quantidade;
        echo "$this->nome ganhou $quantidade de experiência!\n";

        if ($this->experiencia >= 100) {
            $this->subirNivel();
            $this->experiencia = 0;
        }
    }

    private function subirNivel() {
        $this->nivel++;
        $this->pontosVida += 20;
        echo "$this->nome subiu para o nível $this->nivel! Vida aumentada para $this->pontosVida.\n";
    }

    public function mostrarStatus() {
        echo "=== STATUS DO POKÉMON ===\n";
        echo "Nome: {$this->nome}\n";
        echo "Tipo: {$this->tipo}\n";
        echo "Nível: {$this->nivel}\n";
        echo "Experiência: {$this->experiencia}\n";
        echo "Pontos de Vida: {$this->pontosVida}\n";
        echo "Ataque: {$this->ataque}\n";
        echo "Defesa: {$this->defesa}\n";
        echo "Velocidade: {$this->velocidade}\n";
        echo "==========================\n\n";
    }
}

$pikachu = new Pokemon("Pikachu", "Elétrico", 5, 100, 40, 20, 60);
$charmander = new Pokemon("Charmander", "Fogo", 5, 90, 45, 15, 55);

$pikachu->mostrarStatus();
$charmander->mostrarStatus();

$pikachu->batalhar($charmander);

$pikachu->mostrarStatus();
$charmander->mostrarStatus();
