// Buscando componentes
// Buscando o formulário do documento
const form = document.querySelector("form");
const btnPesqCep = document.querySelector("#pesqCep");
const cmpCep = document.querySelector("#cep");
const cmpCidade = document.querySelector("#cidade");
const cmpEndereco = document.querySelector("#endereco");
const cmpEstado = document.querySelector("#estado");
const cmpBairro = document.querySelector("#bairro");

// Colocando o eventos
form.addEventListener("submit",(evt)=>testarFormulario(evt,form));
btnPesqCep.addEventListener("click",()=>{
  alert("pesquisando o cep e preenchendo os valores! :-)");
  if (cmpCep.value != ""){
    pesquisaCep(cmpCep.value).then(retornoCep=>{
      if (retornoCep!=null){
        cmpEndereco.value = retornoCep.logradouro;
        cmpBairro.value = retornoCep.bairro;
        cmpCidade.value = retornoCep.localidade;
        cmpEstado.value = retornoCep.uf;
      }
    })
  }
})

// Funções do sistema
// Criando a função para testar os dados de envio do formulário
function testarFormulario(evento,frm){
  let ret = false;
  // Essa linha abaixo é para evitar o envio do formulário se as linhas
  // de baixo dele estiverem com erro
  // evento.preventDefault();
  // fazer os testes aqui
  const nome = document.querySelector("#nome");
  const msgErros = document.querySelector(".msgErros");
  // Limpando as mensagens de erro
  msgErros.innerHTML = "";
  Array.from(document.querySelectorAll(".show")).forEach(it=>{
    it.classList.remove("show");
  })
  // O campo msgErros vai ser preenchido conform os erros
  if (nome.value==""){ 
    // document.querySelector("#erroNome").classList.add("show");
    msgErros.innerHTML += "<li>Campo Nome Deve ser preenchido!</li>";
  }
  // Podemos testar pelo formulário que é passado na função
  if (frm["cpf"].value=="" || frm["cpf"].value != "" && !validarCPF(frm["cpf"].value)) 
    msgErros.innerHTML += "<li>Campo CPF Deve ser preenchido ou está inválido!</li>"
  if (frm["nascimento"].value=="") 
    msgErros.innerHTML += "<li>Campo Data Nascimento Deve ser preenchido!</li>"
  // Depois de testar todos os componentes, se a msgErros estiver em branco
  // Significa que não temos erros
  if (msgErros.innerHTML=="") ret=true;

  //fim do código
  if (!ret) 
    evento.preventDefault();
  else
    alert("Gravado com sucesso");
}
// Função de pesquisa de cep
async function pesquisaCep(cep){
  return new Promise(async (resolve, reject)=>{
    let url=`https://viacep.com.br/ws/${cep}/json/`;
    fetch(url).then(res=>res.json()).then(out=> {
      resolve(out);
    }).catch(erro=>{reject(erro)})
  
  }) 
}

function validarCPF(cpf) {	
	cpf = cpf.replace(/[^\d]+/g,'');	
	if(cpf == '') return false;	
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
			return false;		
	// Valida 1o digito	
	add = 0;	
	for (i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i)) * (10 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
			return false;		
	// Valida 2o digito	
	add = 0;	
	for (i = 0; i < 10; i ++)		
		add += parseInt(cpf.charAt(i)) * (11 - i);	
	rev = 11 - (add % 11);	
	if (rev == 10 || rev == 11)	
		rev = 0;	
	if (rev != parseInt(cpf.charAt(10)))
		return false;		
	return true;   
}