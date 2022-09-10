Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 28/05/2022
Var
// Seção de Declarações das variáveis 
  intNFat : inteiro
  intI : inteiro
  intRes : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
  escreval("Programa fatorial")
  escreval("Digite o numero a ser feito o fatorial:")
  leia(intNFat)
  intRes := 1;
  para intI de intNFat ate 2 passo -1 faca
    intRes := intRes * intI
  fimpara
  escreval("O resultado é ",intRes)

Fimalgoritmo