Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 04/06/2022
Var
// Seção de Declarações das variáveis 
  medias : vetor [1..15,1..5] de real
  nomes  : vetor [1..15,1..2] de caracter
  lin, col : inteiro
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
  para lin de 1 ate 15 faca
    escreva("Digite o nome do aluno ",lin,":")
    leia(nomes[lin,1])
    //inicializando a coluna com a média final
    medias[lin,5] <- 0
    //Dando entrada nas notas do aluno
    para col de 1 ate 4 faca
      escreva("Digite a nota do B",col,":")
      leia(medias[lin,col])
      //aproveitando para armazenar a nota digitada
      //na coluna de média final
      medias[lin,5] <- medias[lin,5] + medias[lin,col]
    fimpara
    //calculando a média final dividindo por 4 bimestres
    medias[lin,5] <- medias[lin,5] / 4
    //atribuimos aprovado para o aluno
    nomes[lin,2] <- "AP"
    //porém se a média final for menor que 6
    //mudamos para reprovado
    se medias[lin,5] < 6 entao
      nomes[lin,2] <- "RP"
    fimse
  fimpara
  //listando a posição dos alunos com sua média final
  para lin de 1 ate 15 faca
    escreval(nomes[lin,1]," - ",nomes[lin,2]," - ",medias[lin,5])
  fimpara
Fimalgoritmo