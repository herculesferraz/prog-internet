Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var

   opc : inteiro
   total : real
   peso : real

Inicio
   // Se��o de Comandos, procedimento, fun��es, operadores, etc...
   escreval("Digite o c�digo do planeta")
   escreval("�1 Mercurio")
   escreval("�2 Venus")
   escreval("�3 Marte")
   escreval("�4 Jupiter")
   escreval("�5 Saturno")
   escreval("�6 Urano")

   leia(opc)

   escreval("Digite seu peso")
   leia(peso)



   escolha(opc)
   caso  1
      total <- (peso * 0.37) / 10
      escreval("Seu peso em Mercurio � Kg ", total)

     caso  2
        total <- (peso * 0.88) / 10
          escreval("Seu peso em V�nus � Kg ", total)

     caso  3
        total <- (peso * 0.38) / 10
          escreval("Seu peso em Marte � Kg ", total)

     caso  4
       total <- (peso * 2.64) / 10
         escreval("Seu peso em J�piter � Kg ", total)

     caso  5
       total <- (peso * 1.15) / 10
         escreval("Seu peso em Saturno � Kg ", total)

     caso  6
        total <- (peso * 1.17) / 10
          escreval("Seu peso em Urano � Kg ", total)
     caso 7
        escreval("Plut�o n�o � planeta")
     outrocaso
     escreval("O planeta ta errado ai, porem vc continua tendo Kg",peso)
     
     fimescolha
Fimalgoritmo