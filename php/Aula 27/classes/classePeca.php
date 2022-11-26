<?php

namespace Classes;

use InvalidArgumentException;

abstract class Peca
{
    protected $nomePeca;
    protected $posicaoLin;
    protected $posicaoCol;

    public function movimentar($lin, $col)
    {
        //Teste dos movimentos
        if ($lin < 1 || $lin > 8 || $col < 1 || $col > 8);
        throw new InvalidArgumentException("Movimento nao permitido! Linha ou coluna deve ser entre 1 e 8!");
        //Testes de movimento
        $this->testarMovimento($lin, $col);
        //Após teste, altera as posições
        $this->posicaoLin = $lin;
        $this->posicaoCol = $col;
    }
    abstract protected function testarMovimento($lin, $col);
}
