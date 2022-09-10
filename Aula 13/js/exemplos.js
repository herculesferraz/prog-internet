//const disp = document.getElementById("display");
const disp = document.querySelector("#display");
//Aqui estou selecionando todos os elementos que estão usando a class btn
//const btns = document.getElementsByClassName("btn");
const btns = document.querySelectorAll(".btn");

function minhafuncao() {
  //Nesse ponto estou buscando no html um item que tem o id chamado display
  alert("O valor do display é " + disp.innerHTML);
  //disp.innerHTML = "Alterei o conteúdo! :-)";
}
console.log(btns);
Array.from(btns).forEach(btn => {
  // console.log(btn);
  btn.addEventListener("click",()=>{
    // alert("Você clicou no btn " + btn.dataset.valor);
    disp.innerHTML += btn.dataset.valor;
  })
});

// for (let i=0;i<btns.length;i++){
//   let btn=btns[i];
//   btn.addEventListener("click",()=>{
//     alert("Você clicou no btn " + btn.dataset.valor);
//   }) 
// }