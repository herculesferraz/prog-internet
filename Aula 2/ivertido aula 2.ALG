Algoritmo "semnome"
// Disciplina   : [Linguagem e L?gica de Programa??o]
// Professor   : Antonio Carlos Nicolodi 
// Descri??o   : Aqui voc? descreve o que o programa faz! (fun??o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 07/05/2022
Var
// Se??o de Declara??es das vari?veis
   primeiroNumero : inteiro
   invertidoNumero : inteiro
   unidadeNumero : inteiro
   dezenaNumero  : inteiro
   centenaNumero : inteiro
Inicio
// Se??o de Comandos, procedimento, fun??es, operadores, etc... 
   escreva("Digite um valor de at? tres digitos: ")
   leia(primeiroNumero)
   unidadeNumero <- primeiroNumero mod 10
   dezenaNumero <- primeiroNumero mod 100 div 10
   centenaNumero <- primeiroNumero mod 1000 div 100
   invertidoNumero <- unidadeNumero * 100 + dezenaNumero * 10 + centenaNumero * 1
   escreval("o numero invertido ?: ", invertidoNumero)
Fimalgoritmo