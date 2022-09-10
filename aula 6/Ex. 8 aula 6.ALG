Algoritmo "semnome"
 procedimento bubbleSort()
var
  li, lf : inteiro
  troca  : caracter
inicio
  para li de 1 ate 49 faca
    para lf de li ate 10 faca
      //ordem decendente
      se nome[li] <= nome[lf] entao
        troca <- nome[lf]
        nome[lf] <- nome[li]
        nome[li] <- troca
      fimse
    fimpara
  fimpara
fimprocedimento
Var
   nome : vetor [1..50] de caractere
   apoio : inteiro
Inicio
  aleatorio on
   para apoio de 1 ate 50 faca
      escreva("Digite um nome ", apoio,": ")
      leia(nome[apoio])
   fimpara
   aleatorio off
     //ordendao dados
     bubbleSort
     //listando nomes
     para apoio de 1 ate 50 faca
       escreval("__________________________________")
      escreval(nome[apoio])
       escreval("¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯")
     fimpara
fimalgoritmo