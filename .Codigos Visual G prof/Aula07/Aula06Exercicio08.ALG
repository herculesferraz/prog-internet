Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 11/06/2022
procedimento bubblesort
var
 li, lf : inteiro
 troca : caracter
inicio
  para li de 1 ate 29 faca
    para lf de li ate 30 faca
      se nomes[li] > nomes[lf] entao
        troca <- nomes[li]
        nomes[li]<- nomes[lf]
        nomes[lf]<- troca
      fimse
    fimpara
  fimpara
fimprocedimento

Var
// Seção de Declarações das variáveis 
  nomes : vetor[1..30] de caracter
  lin : inteiro
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
  aleatorio on
  para lin de 1 ate 30 faca
    leia(nomes[lin])
  fimpara
  aleatorio off
  //ordenando os dados
  bubblesort
  escreval("------------------------")
  escreval("Listando os dados ordenados")
  //listando os dados
  para lin de 1 ate 30 faca
    escreval(nomes[lin])
  fimpara
Fimalgoritmo