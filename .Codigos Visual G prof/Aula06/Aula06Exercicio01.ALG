Algoritmo "semnome"

Var
// Seção de Declarações das variáveis 
  intI : inteiro
  nomes : vetor[1..10] de caracter

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
  para intI de 1 ate 10 faca
    escreva("Digite o nome ", intI,": ")
    leia(nomes[intI])
  fimpara
  
  para intI de 1 ate 10 faca
    escreval(intI," - ", nomes[intI])
  fimpara

Fimalgoritmo