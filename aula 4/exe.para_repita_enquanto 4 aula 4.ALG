Algoritmo "semnome"
Var
n : inteiro
Inicio
escreval("================================================================")
 n <- 1
      escreval("Usando enquanto")

      enquanto n <= 500 faca
        se n mod 5 = 0 entao
          escreva(n, " ")
        fimse
      n <- n + 1
      fimenquanto
   escreval("")
escreval("================================================================")
      escreval("Usando repita")
 n <- 1
      repita
        se n mod 5 = 0 entao
          escreva(n, " ")
        fimse
           n <- n + 1
      até n >  500
  escreval("")
escreval("================================================================")
 n <- 1
     escreval("Usando para")
      para n de 0 ate 500 passo 5 faca
        escreva(n, " ")
      fimpara
         escreval("")
escreval("================================================================")
Fimalgoritmo