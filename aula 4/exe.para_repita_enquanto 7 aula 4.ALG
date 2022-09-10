Algoritmo "semnome"
Var
   cont : inteiro
   numDigt : inteiro
   numMaior : inteiro
Inicio
   escreval("================================================================")
   escreval("Usando enquanto")
   cont <- 1
   enquanto cont <= 5 faca
      escreval("Digite um numero: ")
      leia(numDigt)

      se cont > 1 entao
         se numDigt < numMaior entao
            numMaior <- numDigt
         fimse
      senao
         numMaior <- numDigt
      fimse
      cont <- cont + 1
   fimenquanto
   escreval("O menor numero é: ",numMaior)
   escreval("")
   escreval("================================================================")
   escreval("Usando repita")
   cont <- 1
   repita
      escreval("Digite um numero: ")
      leia(numDigt)

      se cont > 1 entao
         se numDigt < numMaior entao
            numMaior <- numDigt
         fimse
      senao
         numMaior <- numDigt
      fimse
      cont <- cont + 1
   ate cont > 5
   escreval("O menor numero é: ",numMaior)
   escreval("")
   escreval("================================================================")
   escreval("Usando para")

   cont <- 1
   para cont de 1 ate 5 passo 1 faca
      escreval("Digite um numero: ")
      leia(numDigt)
      se cont > 1 entao
         se numDigt < numMaior entao
            numMaior <- numDigt
         fimse
      senao
         numMaior <- numDigt
      fimse
   fimpara
   escreval("O menor numero é: ",numMaior)


Fimalgoritmo