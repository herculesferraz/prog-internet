Algoritmo "semnome"
Var
   cont : inteiro
   numDigt : inteiro
   soma : inteiro
Inicio
   escreval("================================================================")
   escreval("Usando enquanto")
   cont <- 1
   enquanto cont <= 5 faca
      escreval("Digite um numero: ")
      soma <- soma + numDigt
      cont <- cont + 1
   fimenquanto
   escreval("O menor numero é: ",soma)
   escreval("")
   escreval("================================================================")
   escreval("Usando repita")
   cont <- 1
   repita
      escreval("Digite um numero: ")
      leia(numDigt)
      soma <- soma + numDigt
      cont <- cont + 1
   ate cont > 5
   escreval("O menor numero é: ",soma)
   escreval("")
   escreval("================================================================")
   escreval("Usando para")

   cont <- 1
   para cont de 1 ate 5 passo 1 faca
      escreval("Digite um numero: ")
      leia(numDigt)
      soma <- soma + numDigt
   fimpara
   escreval("O menor numero é: ",soma)


Fimalgoritmo