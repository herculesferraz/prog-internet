Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Seção de Declarações das variáveis 
  numero : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
  escreval("Digite um número inteiro:")
  leia(numero)
  
  se numero % 2 = 0 entao
    escreval("O número digitado é par")
  fimse
  
  se numero % 2 <> 0 entao //!=
    escreval("O numero digitado é impar")
  fimse
  
Fimalgoritmo