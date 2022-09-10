Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/05/2022
Var
// Seção de Declarações das variáveis
  opcao : inteiro
  pesoNaTerra : real
  pesoNoPlaneta : real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
  escreval("Digite o peso na terra:")
  leia(pesoNaTerra)
  escreval("Opções de planetas")
  escreval("1 - Mercúrio")
  escreval("2 - Vênus")
  escreval("3 - Marte")
  escreval("4 - Júpiter")
  escreval("5 - Saturno")
  escreval("6 - Urano")
  escreval("Digite a opção")
  leia(opcao)
  se opcao = 1 entao
    pesoNoPlaneta := pesoNaTerra / 10 * 0.37
  senao
    se opcao = 2 entao
       pesoNoPlaneta := pesoNaTerra / 10 * 0.88
    senao
      se opcao = 3 entao
        pesoNoPlaneta := pesoNaTerra / 10 * 0.38
      senao
        se opcao = 4 entao
           pesoNoPlaneta := pesoNaTerra / 10 * 1.15
        senao
          se opcao = 5 entao
            pesoNoPlaneta := pesoNaTerra / 10 * 1.15
          senao
            se opcao = 6 entao
              pesoNoPlaneta := pesoNaTerra / 10 * 1.17
            senao
              pesoNoPlaneta := pesoNaTerra
              escreval("Planeta não está na relação!")
            fimse
          fimse
        fimse
      fimse
    fimse
  fimse
  escreval("O peso no planeta é ",pesoNoPlaneta)

Fimalgoritmo