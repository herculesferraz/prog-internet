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
  i <- 1
  enquanto i <= 20 faca
    escreva(i ^ 2, " ")
    i <- i + 1
  fimenquanto
  escreval("-----------------------")
  escreval("Usando o Repita")
  //Iniciando o repita
  i <- 1
  repita
    escreva(i ^ 2, " ")
    i <- i + 1
  ate i > 20
  escreval("-----------------------")
  escreval("Usando o Para")
  //Iniciando o para
  para i de 1 ate 20 passo 1 faca
    escreva(i ^ 2, " ")
  fimpara
Fimalgoritmo