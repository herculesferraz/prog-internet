Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 07/05/2022
Var
// Seção de Declarações das variáveis 
  intValor : inteiro
  intUnidade : inteiro
  intDezena : inteiro
  intCentena : inteiro
  intInverso : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
  escreval("Digite um valor de até 3 dígitos:")
  leia(intValor)
  intUnidade <- intValor mod 10
  intDezena <- intValor mod 100 div 10
  intCentena <- intValor mod 1000 div 100
  intInverso <- intUnidade * 100 + intDezena * 10 +  intCentena
  escreval("O valor invertido é ",intInverso)

Fimalgoritmo