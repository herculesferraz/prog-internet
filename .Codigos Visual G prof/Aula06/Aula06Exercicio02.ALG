Algoritmo "semnome"

Var
// Seção de Declarações das variáveis
  intI : inteiro
  numeros : vetor[1..15] de inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
  para intI de 1 ate 15 faca
    escreva("Digite um numero ", intI,": ")
    leia(numeros[intI])
  fimpara

  para intI de 1 ate 10 faca
    escreva(numeros[intI])
    se numeros[intI] mod 2 = 0 entao
      escreval(" o número é par")
    senao
      escreval(" o número é impar")
    fimse
  fimpara

Fimalgoritmo