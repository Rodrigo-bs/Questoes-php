<?php

class Palidromo {
    private $palavra;
    private $palavraOriginal;

    public function __construct($palavra) {
        $this->palavra = $this->reverterString($this->limparString($palavra));
        $this->palavraOriginal = $this->limparString($palavra);
    }

    private function limparEspacos($p) {
        $palavra = str_replace(' ', '', $p);
        return $palavra;
    }

    private function limparMaiusculo($p) {
        $palavra = strtolower($p);
        return $palavra;
    }

    private function reverterString($p) {
        $palavra = strrev($p);
        return $palavra;
    }

    public function limparString($p) {
        $palavra = $this->limparEspacos($p);
        $palavra = $this->limparMaiusculo($palavra);

        return $palavra;
    }

    public function comparar() {
        if ($this->palavra === $this->palavraOriginal) return 1;
        else return 0;
    }
}

?>