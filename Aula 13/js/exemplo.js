// const disp = document.getElementById ("display");
const disp = document.querySelector ("#display");
// const btns = document.getElementsByClassName ("btn");
const btns = document.querySelectorAll (".btn");

// function minhafuncao() {
    
    // alert ("o valor do display é: " + disp.innerHTML);
// }
console.log(btns); 
Array.from(btns).forEach(btn=> {
    btn.addEventListener("click", () =>{
    // alert("Você clicou no botão " + btn.dataset.valor);
    disp.innerHTML = btn.dataset.valor;
    })
});