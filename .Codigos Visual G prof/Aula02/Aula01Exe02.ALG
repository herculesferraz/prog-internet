Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 07/05/2022
Var
// Seção de Declarações das variáveis 
// Seção de Declarações das variáveis
  intValor : inteiro
  intDezena : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
  escreval("Digite um valor de até 3 dígitos:")
  leia(intValor)
  intDezena <- intValor mod 100 div 10 //mod == %
  escreval("A dezena é ", intDezena)
Fimalgoritmo