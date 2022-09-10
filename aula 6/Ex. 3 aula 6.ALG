Algoritmo "semnome"

Var
   num : vetor [1..8] de inteiro
   intI : inteiro
   mult : inteiro
Inicio

   para intI de 1 ate 8 faca
      escreva("Digite o numero ", intI,": ")
      leia(num[intI])
   fimpara

   para intI de 1 ate 8 faca
      escreval(intI," - ", num[intI])
      se num[intI] mod 6 = 0 entao
         mult <- mult + 1
      fimse
   fimpara
   escreval("O total de numeros multiplos de 6 são : ", mult)
Fimalgoritmo