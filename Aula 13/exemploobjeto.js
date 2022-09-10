var fumante = true;
var obj3 = 
{
  "id" : 10,
  "nome" : "nome",
  "endereco" : 
  [
    { "tipo" : "residencial", "rua" : "rua 1", "bairro": "centro"},
    { "tipo" : "comercial", "rua" : "rua 2", "bairro": "centro"}
  ],
  "fumante" : fumante,
}
obj3["praticaEsporte"] = true;
obj3["telefones"]=
[
  {"tipo": "celular", "numero": "123131313"}
]
console.log(obj3)
//delete obj3.nome
//console.log(obj3)
if (obj3.hasOwnProperty("nome")) console.log("tem nome")