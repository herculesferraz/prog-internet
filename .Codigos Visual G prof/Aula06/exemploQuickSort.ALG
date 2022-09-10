Algoritmo "semnome"

procedimento troca( li : inteiro; lf : inteiro)
var
  apoio : caracter
inicio
  apoio <- itens[li]
  itens[li] <- itens[lf]
  itens[lf] <- apoio
fimprocedimento

funcao particao(start : inteiro; end : inteiro) : inteiro
var
  li, lj : inteiro
inicio
  li <- start
  para lj de start ate end - 1 faca
    se itens[lj] <= itens[end] entao
      troca(li,lj)
      li <- li + 1
    fimse
  fimpara
  troca(li,end)
  retorne li
fimfuncao

procedimento quickSort(ini : inteiro; fim : inteiro)
var
  pivo : inteiro
inicio
  se ini < fim entao
    pivo <- particao(ini, fim)
    quickSort(ini, pivo - 1)
    quickSort(pivo + 1, fim)
  fimse
fimprocedimento

Var
// Seção de Declarações das variáveis
  itens : vetor [1..10] de caracter
  i : inteiro
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
 aleatorio on
 para i de 1 ate 10 faca
   leia(itens[i])
 fimpara
 aleatorio off
 quickSort(1,10)
 escreval("Listando os valores classificados!")
 para i de 1 ate 10 faca
   escreval(itens[i])
 fimpara

Fimalgoritmo