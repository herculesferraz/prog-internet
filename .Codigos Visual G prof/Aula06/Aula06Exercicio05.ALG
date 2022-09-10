Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 04/06/2022
Var
// Seção de Declarações das variáveis 
  func : vetor[1..20] de caractere
  sala : vetor[1..20] de real
  lin  : inteiro
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
  para lin de 1 ate 20 faca
    escreva("Digite o nome do funcionário",lin,":")
    leia(func[lin])
    escreva("Digite o salário do funcionário",lin,":")
    leia (sala[lin])
    //aplicando o aumento de salário
    sala[lin] <- sala[lin] * 1.08
  fimpara
  //listando os funcionários com o salário reajustado
  para lin de 1 ate 20 faca
    escreval(func[lin]," - ", sala[lin])
  fimpara
Fimalgoritmo