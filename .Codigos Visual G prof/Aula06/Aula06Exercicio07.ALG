Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 09/06/2022
Var
// Seção de Declarações das variáveis 
  pessoa : vetor[1..20] de inteiro
  signos : vetor[1..12] de caracter
  ultdia : vetor[1..12] de inteiro
  i, vlr, dd, mm : inteiro
  signoPessoa : caracter
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
  //montando a tabela do ultimo dia e do signo
  signos[1] <- "Capricórnio"
  signos[2] <- "Aquário"
  signos[3] <- "Peixes"
  signos[4] <- "Áries"
  signos[5] <- "Touro"
  signos[6] <- "Gêmeos"
  signos[7] <- "Câncer"
  signos[8] <- "Leão"
  signos[9] <- "Virgem"
  signos[10] <- "Libra"
  signos[11] <- "Escorpião"
  signos[12] <- "Sagitário"
  ultDia[1] <- 20
  ultDia[2] <- 19
  ultDia[3] <- 20
  ultDia[4] <- 20
  ultDia[5] <- 20
  ultDia[6] <- 20
  ultDia[7] <- 21
  ultDia[8] <- 22
  ultDia[9] <- 22
  ultDia[10] <- 22
  ultDia[11] <- 21
  ultDia[12] <- 21
  //Colocando aleatório
  aleatorio on
  //Determinando o aleatório entre 1 e 31
  aleatorio 1, 31
  //Laço de repetição para "cadastrar" os dias/meses
  para i de 1 ate 20 faca
    //pegando o dia
    leia(dd)
    //pegando o mês
    leia(mm)
    //Forçando o mês a ser entre 1 e 12 (o aleatório vai de 1 a 31)
    mm <- mm mod 12
    //Se for mês 12 o módulo volta zero
    se mm=0 entao
      mm<-12
    fimse
    //verificando a questão de dias com 30, 31 ou 28
    //não estou considerando o ano bissexto
    escolha mm
    caso 2
      dd <- dd mod 28
      se dd=0 entao
         dd <- 28
      fimse
    caso 4,6,9,11
      dd <- dd mod 30
      se dd=0 entao
         dd <- 30
      fimse
    fimescolha
    pessoa[i] <- dd * 100 + mm
  fimpara
  aleatorio off
  
  para i de 1 ate 20 faca
   dd <- pessoa[i] div 100
   mm <- pessoa[i] mod 100
   //Se o dia for maior, aumentamos 1 mês
   se ( ultDia[mm] < dd ) entao
     mm <- ( mm + 1 ) mod 12
     //se o mm + 1 der 12 o resto será zero
   fimse
   //nesse caso temos que testar e deixar como 12
   se ( mm = 0 ) entao
     mm <- 12
   fimse
   //agora podemos pegar o signo
   signoPessoa <- signos[mm]
   escreval(i, " - ", pessoa[i]," - ", signoPessoa)
  fimpara
Fimalgoritmo