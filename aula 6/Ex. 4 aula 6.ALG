Algoritmo "semnomes"

Var
   medias : vetor [1..15,1..5] de real
   nomes : vetor [1..15,1..2] de caracter
   lin, col : inteiro
Inicio

   para lin de 1 ate 15 faca
      escreva("Aluno", lin,": ")
      leia(nomes[lin,1])
      medias[lin,5] <- 0
      para col de 1 ate 4 faca
         escreva("Digite a nota do Bimestre ",col,":")
         leia(medias[lin,col])
         medias[lin,5] <- medias[lin,5] + medias[lin,col])
      fimpara
      medias[lin,5] <- medias [lin,5] / 4
      nomes [lin,2] <- "Aprovado"
      se medias [lin,5] < 6 entao
         nomes[lin,2] <- "Reprovado"
      fimse
   fimpara
   para lin de 1 ate 15 faca
      escreval(nomes[lin,1]," - ",nomes[lin,2]," - ", medias[lin,5])
   fimpara
Fimalgoritmo