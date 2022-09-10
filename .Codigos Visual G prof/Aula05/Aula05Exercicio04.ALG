Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 28/05/2022
Var
// Seção de Declarações das variáveis 
  intNSeq : inteiro
  intI, intNumAnt, intNumAntAnt, intApoio : inteiro
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
  escreval("Sequência de Fibonacci")
  escreval("Digite o termo desejado da sequência (maior que 4):")
  leia (intNSeq)
  intNumAnt := 1   //segundo termo
  intNumAntAnt := 0 //primeiro termo
  escreva(intNumAntAnt,", ",intNumAnt)
  para intI de 3 ate intNSeq faca //a partir do 3 termo
    escreva(",", intNumAnt + intNumAntAnt)
    intApoio := intNumAntAnt
    intNumAntAnt := intNumAnt
    intNumAnt := intNumAnt + intApoio
  fimpara
Fimalgoritmo