Algoritmo "semnome"
// Disciplina   : [Linguagem e L�gica de Programa��o]
// Professor   : Antonio Carlos Nicolodi 
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Se��o de Declara��es das vari�veis 
   nome : caractere
   anoNas : inteiro
   anoAtu : inteiro
   idade : inteiro
Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
   escreval("Escreva seu nome")
   leia(nome)
   escreval("Escreva seu ano des nascimento")
   leia(anoNas)
   escreval("Escreva ano atual")
   leia(anoAtu)
   idade <- anoAtu - anoNas C
   se idade >= 18 entao
fimse
     escreva(nome, " Ja tem carteira de motorista?")
Fimalgoritmo