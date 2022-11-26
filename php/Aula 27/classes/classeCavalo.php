<?php

namespace Classes;

use InvalidArgumentException;

/**
 * Cavalo - Pode se deslocar em qualquer lugar
 * do tabuleiro desde que seja em forma de L
 */
class Cavalo extends Peca
{
    protected function testarMovimento($lin, $col)
    {
        if (!(
            $this->posicaoLin + 2 == $lin && ($this->posicaoCol + 1 == $col || $this->posicaoCol - 1 == $col) ||
            $this->posicaoLin - 2 == $lin && ($this->posicaoCol + 1 == $col || $this->posicaoCol - 1 == $col) ||
            $this->posicaoLin + 1 == $lin && ($this->posicaoCol + 2 == $col || $this->posicaoCol - 2 == $col) ||
            $this->posicaoLin - 1 == $lin && ($this->posicaoCol + 2 == $col || $this->posicaoCol - 2 == $col)
        )) {
            throw new InvalidArgumentException("Movimento nao permitido");
        }
    }
}
