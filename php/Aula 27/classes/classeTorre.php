<?php

namespace Classes;

use InvalidArgumentException;

/**
 *Torre - Anda qauntas cases desejadas
 *desde que seja em uma linha reta
 */
class Torre extends Peca
{
    protected function testarMovimento($lin, $col)
    {
        if ($this->posicaoLin != $lin && $this->posicaoCol != $col) {
            throw new InvalidArgumentException("Movimento nao permitido");
        }
    }
}
