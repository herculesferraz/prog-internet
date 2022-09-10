Algoritmo "semnome"
Var
n : inteiro
Inicio
escreval("================================================================")
 n <- 100
      escreval("Usando enquanto")

      enquanto n >= 0 faca
        escreva(n, " ")
          n <- n - 1
      fimenquanto
      escreval("")
escreval("================================================================")
      escreval("Usando repita")
 n <- 100
      repita
        escreva(n, " ")
          n <- n - 1
      até n < 0
     escreval("")
escreval("================================================================")
 n <- 1
     escreval("Usando para")
      para n de 100 ate 0 passo -1 faca
        escreva(n, " ")
      fimpara
         escreval("")
escreval("================================================================")
Fimalgoritmo