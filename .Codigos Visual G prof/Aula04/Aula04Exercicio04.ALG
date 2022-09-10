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
  enquanto i <= 500 faca
    se i mod 5 = 0 entao
      escreva(i, "  ")
    fimse
    i <- i + 1
  fimenquanto
  //Repita
  escreval("--------------------")
  escreval("Usando o Repita")
  i <- 1
  repita
    se i mod 5 = 0 entao
      escreva(i, "  ")
    fimse
    i <- i + 1
  ate i>500
  //para
  escreval("--------------------")
  escreval("Usando o Para")
  para i de 1 ate 500 passo 1 faca
    se i mod 5 = 0 entao
      escreva(i, "  ")
    fimse
  fimpara
Fimalgoritmo