const btns = document.querySelectorAll(".btn")

Array.from(btns).forEach(btn => {
    btn.addEventListener("click", () => {
        execucaoBtn(btn);
    })
})
let ultBtn = "";
function execucaoBtn(bt) {
    const display = document.querySelector("#display");
    switch (bt.dataset.tipo) {
        case "numero":
            display.innerHTML += bt.dataset.valor;
            ultBtn = bt.dataset.tipo
            break;
        case "operacao":
            if (bt.dataset.valor != "eq" &&
                bt.dataset.valor != "clear" &&
                ultBtn != "operacao") 
            {
                display.innerHTML += bt.dataset.valor;
                ultBtn = bt.dataset.tipo
            }
            {
                if(bt.dataset.valor == "eq"){
                    display.innerHTML = eval (display.innerHTML);
                    ultBtn = "numero";
                }
                if(bt.dataset.valor == "clear"){
                    display.innerHTML = "0";
                    ultBtn = "numero";
            }
            break;
        }
    }
}
