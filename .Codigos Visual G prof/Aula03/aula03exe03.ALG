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

  se numero % 3 = 0 entao
    escreval("O número digitado é divisível por 3")
  fimse

  se numero % 3 <> 0 entao //!=
    escreval("O numero digitado não é divisível por 3")
  fimse
Fimalgoritmo