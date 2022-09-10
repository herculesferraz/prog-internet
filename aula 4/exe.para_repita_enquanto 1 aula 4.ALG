Algoritmo "semnome"
Var
n : inteiro
Inicio
escreval("================================================================")
 n <- 1
      escreval("Usando enquanto")

      enquanto n <= 100 faca
       se n mod 2 = 0 entao
          escreva(, n, " ")
       fimse
          n <- n + 1
      fimenquanto
      escreval("")
escreval("================================================================")
      escreval("Usando repita")
 n <- 1
      repita
        escreva(n, " ")
          n <- n + 1
      até n > 100
     escreval("")
escreval("================================================================")
 n <- 1
     escreval("Usando para")
      para n de 1 ate 100 passo 1 faca
        escreva(n, " ")
      fimpara
         escreval("")
escreval("================================================================")
Fimalgoritmo