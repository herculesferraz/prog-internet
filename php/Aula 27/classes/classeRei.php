<?php

namespace Classes;

use InvalidArgumentException;

/**
 * Rei - pode andar para qualquer casa 1 posição
 * pode cpturar em 1 posicao ao seu alcance
 * nao pode se movimentar-se em uma posicao que coloque
 * ele em check
 */
class Rei extends Peca
{
    protected function testarMovimento($lin, $col)
    {
        if (
            $this->posicaoLin - $lin != 1 || //testar se o rei esta em check
            $this->posicaoCol - $col != 1
        ) {
            throw new InvalidArgumentException("Movimento nao permitido");
        }
    }
}
