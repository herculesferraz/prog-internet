Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 07/05/2022
Var
// Seção de Declarações das variáveis 
  intValor : inteiro
  intCentena : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
  escreval("Digite um valor de até 3 dígitos:")
  leia(intValor)
  intCentena <- intValor mod 1000 div 100 //mod == %
  escreval("A Centena é ", intCentena)
Fimalgoritmo