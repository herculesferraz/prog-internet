Algoritmo "semnome"

Var
   num : vetor [1..15] de inteiro
   intI : inteiro

Inicio

   para intI de 1 ate 15 faca
      escreva("Digite o numero ", intI,": ")
      leia(num[intI])
   fimpara

   para intI de 1 ate 15 faca
      se num[intI] mod 2 = 0 entao
         escreval(intI,"- ", num[intI], " - Par")
      senao
         escreval(intI,"- ", num[intI], " - Impar")
      fimse
   fimpara
Fimalgoritmo