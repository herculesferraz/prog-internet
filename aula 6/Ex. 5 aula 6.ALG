Algoritmo "semnomes"

Var
   est : vetor [1..100,1..2] de real
   lin, col : inteiro
   v10, v10a20, v20 : inteiro
   lucro : real

Inicio
v10 <- 0
v10a20 <- 0
v20 <- 0

      para lin de 1 ate 100 faca
       escreva("Digite o valor do produto", lin, ": ")
       leia(est[lin,1])
       escreva("Escreva o valor da venda", lin, ": ")
       leia(est[lin,2])
       lucro <- (est[lin,2] - est[lin,1]) / est[lin,1] * 100
       se lucro < 10 entao
        v10 <- v10 + 1
       senao
         se lucro <= 20 entao
         v10a20 <- v10a20 + 1
         senao
           v20 <- v20 + 1
         fimse
       fimse
      fimpara
         escreval("Total de produtos com <10%", v10)
         escreval("Total de produtos entre 10 e 20%", v10a20)
         escreval("Total de produtos com >20%", v20)
Fimalgoritmo
