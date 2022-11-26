<?php

namespace Classes;

use InvalidArgumentException;

/**
 * Peao - Anda duas posiçoes inicias, após isso
 * anda 1 posição, captura a sua diagonal
 */
class Peao extends Peca
{
    public function __construct($linInicial = 2,$colInicial = 1)
    {
    $this->posicaoLin = $linInicial;
    $this->posicaoCol = $colInicial;
    $this->nomePeca=="Peão";    
    }
    protected function testarMovimento($lin, $col)
    {
        if (
            ($this->posicaoLin == 2 && $lin > 4) ||
            $this->posicaoCol != $col ||
            ($this->posicaoLin != 2 && $this->posicaoLin - $lin != 1)
        );
        throw new InvalidArgumentException("Movimento nao permitido");
    }
}
