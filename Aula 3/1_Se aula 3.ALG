Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Seção de Declarações das variáveis 
   nome : caractere
   anoNas : inteiro
   anoAtu : inteiro
   idade : inteiro
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
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