<?php

namespace Classes;

use InvalidArgumentException;

/**
 *Bispo - Anda em quantas casas desejadas desde
 *seja em uma diagonal que ele esteja
 */
class Bispo extends Peca
{
    protected function testarMovimento($lin, $col)
    {
        if ($this->posicaoLin == $lin || $this->posicaoCol == $col) {
            throw new InvalidArgumentException("Movimento nao permitido");
        }
    }
}
