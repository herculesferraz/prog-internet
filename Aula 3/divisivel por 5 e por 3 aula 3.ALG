Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Seção de Declarações das variáveis 
   num : inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval("Digite um numero")
   leia(num)

     se (num % 3 = 0) e  (num % 5 = 0) entao
       escreval("seu numero é divisivel por 3 e 5")
     fimse
     se (num % 3 <> 0) e (num % 5 <> 0) entao
      escreval("seu numero não é divisivel por 3 e 5")
     fimse

Fimalgoritmo