Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/05/2022
Var
// Seção de Declarações das variáveis
  i : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
  escreval("Usando o enquanto")
  i <- 2
  enquanto i <= 200 faca
    escreva(i, " ")
    i <- i + 2
  fimenquanto
  escreval("-----------------------")
  escreval("Usando o Repita")
  //Iniciando o repita
  i <- 2
  repita
    escreva(i, " ")
    i <- i + 2
  ate i > 200
  escreval("-----------------------")
  escreval("Usando o Para")
  //Iniciando o para
  para i de 2 ate 200 passo 2 faca
    escreva(i, " ")
  fimpara
Fimalgoritmo