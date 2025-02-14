const icone = document.querySelector(".icone");
const opcoes = document.querySelector(".opcoes");

icone.addEventListener("click", () => {
    icone.classList.toggle('active')
    opcoes.classList.toggle('active')
})

function confirma() {
    document.getElementById("confirmacao").style.display = "none";
    document.getElementById("apagarConta").style.display = "none"
    document.getElementById("editarConta").style.display = "none"
    document.getElementById("cancelar").style.display = "block" 


    let opcoes = document.getElementById("opcoes")

    let a = document.createElement('a')

    opcoes.appendChild(a)

    a.innerHTML = "Deseja sair da sua conta?"

    a.href = "sair.php"
}

function deletaConta() {
    document.getElementById("deletConfirmacao").style.display = "none"
    document.getElementById("opcoes").style.display = "none"
    document.getElementById("cancelar").style.display = "block"

    let divApaga = document.getElementById("apagarConta")

    let a = document.createElement('a')

    a.classList.add("confirmApagar")

    divApaga.appendChild(a)

    a.innerHTML = "Deseja apagar sua conta?"

    a.href = "apagarConta.php"
}

function showForm() {
    document.getElementById("form_editar").style.display = "block"
    document.getElementById("dadosUser").style.display = "none"
    document.getElementById("opcoes").style.display = "none"
    document.getElementById("apagarConta").style.display = "none"

}

function cancelar(){
    window.location.href = "http://localhost/ProjetecT/FrontEnd/Perfil/Perfil.php"
}