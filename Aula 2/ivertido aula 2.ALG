Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 07/05/2022
Var
// Seção de Declarações das variáveis
   primeiroNumero : inteiro
   invertidoNumero : inteiro
   unidadeNumero : inteiro
   dezenaNumero  : inteiro
   centenaNumero : inteiro
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreva("Digite um valor de até tres digitos: ")
   leia(primeiroNumero)
   unidadeNumero <- primeiroNumero mod 10
   dezenaNumero <- primeiroNumero mod 100 div 10
   centenaNumero <- primeiroNumero mod 1000 div 100
   invertidoNumero <- unidadeNumero * 100 + dezenaNumero * 10 + centenaNumero * 1
   escreval("o numero invertido é: ", invertidoNumero)
Fimalgoritmo