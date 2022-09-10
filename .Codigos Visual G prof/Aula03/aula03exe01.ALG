Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Seção de Declarações das variáveis 
  nome: caracter
  ano_atual : inteiro
  ano_nasc  : inteiro
  idade     : inteiro
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval("Digite seu nome: ")
   leia(nome)
   escreval("Digite o ano de seu nascimento:")
   leia(ano_nasc)
   escreval("Digite o ano atual:")
   leia(ano_atual)
   //calculando a idade
   idade <- ano_atual - ano_nasc
   se idade >= 18 entao
     escreval("Você é maior, já possui carteira de motorista?")
   senão
     escreval("Infelizmente você não tem carteira de motorista, você é um menor de idade")
   fimse

Fimalgoritmo