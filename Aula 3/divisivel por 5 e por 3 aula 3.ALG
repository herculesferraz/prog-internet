Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Se��o de Declara��es das vari�veis 
   num : inteiro

Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
   escreval("Digite um numero")
   leia(num)

     se (num % 3 = 0) e  (num % 5 = 0) entao
       escreval("seu numero � divisivel por 3 e 5")
     fimse
     se (num % 3 <> 0) e (num % 5 <> 0) entao
      escreval("seu numero n�o � divisivel por 3 e 5")
     fimse

Fimalgoritmo