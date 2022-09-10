Algoritmo "semnome"
// Disciplina   : [UC4 - Lógica de Programação]
// Professor   : Richard Brosler
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 28/05/2022
funcao verificaCPF(strCPF : caracter) : logico
var
 intI, intBase, intDigito, intSoma : inteiro
 intDgV1, intDgV2 : inteiro
 ehInvalido : logico
inicio
  ehInvalido := falso
  
  ehInvalido := (strCPF = "00000000000")
  ehInvalido := ehInvalido ou (strCPF = "11111111111")
  ehInvalido := ehInvalido ou (strCPF = "22222222222")
  ehInvalido := ehInvalido ou (strCPF = "33333333333")
  ehInvalido := ehInvalido ou (strCPF = "44444444444")
  ehInvalido := ehInvalido ou (strCPF = "55555555555")
  ehInvalido := ehInvalido ou (strCPF = "66666666666")
  ehInvalido := ehInvalido ou (strCPF = "77777777777")
  ehInvalido := ehInvalido ou (strCPF = "88888888888")
  ehInvalido := ehInvalido ou (strCPF = "99999999999")

  se ( não ehInvalido ) e (compr(strCPF)= 11) entao
    intSoma := 0
    intBase := 11
    para intI de 1 ate 9 faca
      //Obtendo o dígito do cpf e passando para inteiro
      intDigito := caracpnum(copia(strCPF,intI,1))
      //Multiplicando o dígito pela base - inti e somando
      intSoma := intSoma + intDigito *(intBase - intI)
    fimpara
    //Calculando o primeiro dígito verificador
    intDgV1 := 11 - intSoma mod 11
    se intDgV1>9 entao
      intDgV1 := 0
    fimse
    //Calculando o segundo dígito verificado
    intSoma := 0
    intBase := 12
    para intI de 1 ate 10 faca
      //Obtendo o dígito do cpf e passando para inteiro
      intDigito := caracpnum(copia(strCPF,intI,1))
      //Multiplicando o dígito pela base - inti e somando
      intSoma := intSoma + intDigito *(intBase - intI)
    fimpara
    //Calculando o segundo dígito verificador
    intDgV2 := 11 - intSoma mod 11
    se intDgV2>9 entao
      intDgV2 := 0
    fimse
    se ( caracpnum(copia(strCPF,10,1))<>intDgV1 ) ou ( caracpnum(copia(strCPF,11,1))<>intDgV2 ) entao
      ehInvalido <- verdadeiro
    fimse
  fimse
  //Aqui eu sei se é invalido (ehInvalido = verdadeiro)
  //ou se é valido (ehInvalido = falso)
  retorne nao ehInvalido
fimfuncao

Var
// Seção de Declarações das variáveis
  inpCPF : caracter
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
  escreval("Programa validador de CPF")
  escreval("Digite o número do CPF sem pontuação:")
  leia(inpCPF)
  se verificaCPF(inpCPF) entao
    escreval("CPF é Válido")
  senao
    escreval("CPF é inválido!")
  fimse
Fimalgoritmo