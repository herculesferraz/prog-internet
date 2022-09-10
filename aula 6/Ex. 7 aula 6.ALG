Algoritmo "semnome"

   procedimento inicializacao
   inicio
      ultimo_dia[1] <- 20
      ultimo_dia[2] <- 19
      ultimo_dia[3] <- 20
      ultimo_dia[4] <- 20
      ultimo_dia[5] <- 20
      ultimo_dia[6] <- 20
      ultimo_dia[7] <- 21
      ultimo_dia[8] <- 22
      ultimo_dia[9] <- 22
      ultimo_dia[10] <- 22
      ultimo_dia[11] <- 21
      ultimo_dia[12] <- 21

      signos[1] <- "Capricórnio"
      signos[2] <- "Arquario"
      signos[3] <- "Peixes"
      signos[4] <- "Áries"
      signos[5] <- "Touro"
      signos[6] <- "Gemêos"
      signos[7] <- "Câncer"
      signos[8] <- "Leão"
      signos[9] <- "Virgem"
      signos[10] <- "Libra"
      signos[11] <- "Escorpião"
      signos[12] <- "Sargitário"

   fimprocedimento

Var
   data_pessoa : vetor[1..20] de inteiro
   nome_pessoa  : vetor[1..20] de caracter
   ultimo_dia : vetor[1..12] de inteiro
   signos : vetor[1..12] de caracter
   lin : inteiro
   dd, mm : inteiro
   ddmm : inteiro
   mmf : inteiro
Inicio
   aleatorio on
   aleatorio 1, 31
     para lin de 1 ate 20 faca
       leia (dd)
       leia (mm)
       mm <- mm mod 12
        se (mm = 0) entao
         mm <- 12
        fimse
        //verificação do mes de fevereiro
       caso 2
       se (dd = 0) entao
         dd <- dd mod 28
        fimse
        //verificação de mes com 30 dias
       caso 4, 6, 9, 11
       se (dd = 0) entao
         dd <- dd mod 30
        fimse
       fimescolha
       //atribução de data no format. ddmm
       data_pessoa[lin] <- dd * 100 + mm
       //digitação nome pessoa
       leia(nome_pessoa[lin])
     fimpara
     aleatorio off
     //chamado procedimentos
     inicializacao
      para lin de 1 ate 20 faca
      mm <- data_pessoa[lin] mod 100
       mmf <- mm
      dd <- data_pessoa[lin] div 100
       se dd > ultimo_dia[mm] entao
        mm <- (mm + 1) mod 12
         se mm = 0 entao
          mm <- 12
         fimse
        fimse
        escreval("________________________________________________________________")
        escreval(nome_pessoa[lin], " | ", dd, " /", mmf, " | ", signos[mm])
        escreval("¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯")
      fimpara

Fimalgoritmo