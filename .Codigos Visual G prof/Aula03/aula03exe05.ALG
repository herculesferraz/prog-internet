Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Seção de Declarações das variáveis 
  numero : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval("Digite um número inteiro:")
   leia(numero)
   
   se ( numero % 5 = 0 ) e ( numero % 3 = 0 ) entao
     escreval("O número é divisível por 5 e por 3")
   senao
     se ( numero % 5 = 0 ) entao
       escreval("É divisivel por 5")
     senao
       se ( numero % 3 = 0 ) entao
         escreval("É divisivel por 3")
       senao
         escreval("O número não é divisível por 5 e por 3")
       fimse
     fimse
   fimse
   
Fimalgoritmo