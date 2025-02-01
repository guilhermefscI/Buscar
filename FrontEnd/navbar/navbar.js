const linhasOnibus = [
    {
      linha: "4600",
      pontoInicial: "Nossa Senhora de Fatima/Sabará",
      destino: "Belo Horizonte",
      element: document.getElementById("4600")
    },
    {
      linha: "4988",
      pontoInicial: "Siderurgica/Sabará",
      destino: "Belo Horizonte",
      element: document.getElementById("4988")
    },
    {
      linha: "4665",
      pontoInicial: "General Carneiro",
      destino: "Belo Horizonte",
      element: document.getElementById("4665")
      
    },
    {
      linha: "4810",
      pontoInicial: "Caeté",
      destino: "Terminal São Gabriel/Belo Horizonte",
      element: document.getElementById("4810")
    }
];

const searchInput = document.querySelector("#txtBusca")

searchInput.addEventListener("input", e => {
    const value = e.target.value.toLowerCase()
    linhasOnibus.forEach(onibus => {
        const contain = onibus.linha.includes(value) || onibus.pontoInicial.toLowerCase().includes(value) || onibus.destino.toLowerCase().includes(value)
        
        if (contain) {
            onibus.element.style.display = "block"
        } else  {
            onibus.element.style.display = "none"
        }
        
        if (value == "") {
            onibus.element.style.display = "none"
        } 
    })
})
