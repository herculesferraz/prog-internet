// Seção de Declarações das variáveis
Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 21/05/2022
Var
// Seção de Declarações das variáveis
  lin : inteiro
  col : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
  para lin de 1 ate 9 faca
    para col de 1 ate 9 faca
      se (lin=col) ou (lin+col=10) entao
        escreva(lin," -",col, " ")
      senao
        escreva("       ")
      fimse
    fimpara
    escreval("")
  fimpara
  escreval("Usando enquanto")
  lin := 1
  enquanto lin<= 9 faca
    col := 1
    enquanto col <= 9 faca
      se (lin=col) ou (lin+col=10) entao
        escreva(lin," -",col, " ")
      senao
        escreva("       ")
      fimse
       col := col + 1
    fimenquanto
    escreval("")
    lin := lin + 1
  fimenquanto
  escreval("Usando repita")
  lin := 1
  repita
    col := 1
    repita
      se (lin=col) ou (lin+col=10) entao
        escreva(lin," -",col, " ")
      senao
        escreva("       ")
      fimse
       col := col + 1
    ate col>=10
    escreval("")
    lin := lin + 1
  ate lin>=10

Fimalgoritmo

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 


Fimalgoritmo