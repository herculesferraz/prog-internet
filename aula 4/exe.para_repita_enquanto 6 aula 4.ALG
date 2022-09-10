Algoritmo "semnome"

Var

 i : inteiro

Inicio

escreval ("---------------------------------------------------------------")
 escreval("   ")

 escreval("     *Enquanto:")
  escreval("   ")
   i <- 1
    enquanto i <= 100 faca
     escreva (i,  " ")
      i <- i + 1
      se i mod 2 = 0 entao
        escreval (" é impar")
       senao
        escreval (" é par")
     fimse
   fimenquanto
  escreval("   ")
 escreval ("---------------------------------------------------------------")
escreval("   ")
 
  i <- 1

escreval("     *Repita:")
  escreval("   ")
    repita
     escreva(i, " ")
       se i mod 2 = 0 entao
          escreval (" é par")
         senao
          escreval (" é impar")
        fimse
      i <- i + 1
     ate i > 100
   escreval("   ")
  escreval ("---------------------------------------------------------------")
 escreval("   ")
  
  i <- 1
  
 escreval("     *Para:")
  para i de 1 ate 100 passo 1 faca
   escreva(i," ")
   se i mod 2 = 0 entao
     escreval (" é par")
      senao
    escreval (" é impar")
  fimse
    fimpara
   escreval("   ")
 escreval ("---------------------------------------------------------------")
Fimalgoritmo