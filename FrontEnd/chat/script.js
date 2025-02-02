// login elements

const login = document.querySelector(".login")
const loginForm = login.querySelector(".login__form")
const loginInput = login.querySelector(".login__input")

// Chat elements
const chat = document.querySelector(".chat")
const chatForm = chat.querySelector(".chat__form")
const chatMessages = chat.querySelector(".chat__messages")

var mensagemEscolhida = { value: "" }

function vazioVdd() {
    mensagemEscolhida.value = "Ônibus está vazio ou com poucas pessoas"
}

function onibusAdiantadoVdd() {
    mensagemEscolhida.value = "Ônibus está adiantado"
}

function tranVdd() {
    mensagemEscolhida.value = "Transito está congestionado"
}

function lotVdd() {
    mensagemEscolhida.value = "Ônibus está lotado"
}

function rotaVdd() {
    mensagemEscolhida.value = "Houve uma mudança na rota"
}

function acidVdd() {
    mensagemEscolhida.value = "Houve um acidente de trânsito"
}

function problMecVdd() {
    mensagemEscolhida.value = "Ônibus com problemas mecânicos"
}

function obraVdd() {
    mensagemEscolhida.value = "Está ocorrendo obras na pista"
}

function onibusAtrasadoVdd() {
    mensagemEscolhida.value = "Ônibus está atrasado"
}

const user = { id: "", name: "", color: "", }

let websocket

const color = [
    "cadetblue",
    "gold",
    "darkgoldenrod",
    "cornflowerblue",
    "hotpink",
    "darkkhaki"
]

function confirmarLocalizacao() {
    document.getElementById("localizacaoAtual").style.display = 'none'
    document.getElementById("btnSubmit").style.display = 'flex'
}

function local() {
    var e = document.getElementById("localizacaoUsuario");
        
    var text = e.options[e.selectedIndex].text;    

    localizacao = `<div style="font-size:12px; margin-bottom: 10px;">Localização: ${text}</div>`

    console.log(localizacao);
}

function updateClock() {
    var data = new Date(),
        hora = data.getHours() <= 9 ? "0" + data.getHours() : data.getHours(),
        minuto = data.getMinutes() <= 9 ? "0" + data.getMinutes() : data.getMinutes()

    horario = `<br><div style='font-size:12px; display:flex; float:right;'>${hora}:${minuto}</div>`
}

const createMessageSelfElement = (content) => {
    const div = document.createElement("div")

    div.classList.add("message--self")

    updateClock()
    local()

    setInterval(updateClock, 1000)

    div.innerHTML += localizacao
    div.innerHTML += content
    div.innerHTML += horario

    return div
}

const createMessageOtherElement = (content, sender, senderColor) => {
    const div = document.createElement("div")
    const span = document.createElement("span")

    div.classList.add("message--other")

    div.classList.add("message--self")
    span.classList.add("message--sender")
    span.style.color = senderColor

    div.appendChild(span)

    span.innerHTML = sender
    updateClock()
    local()

    setInterval(updateClock, 1000)

    div.innerHTML += localizacao
    div.innerHTML += content
    div.innerHTML += horario


    return div
}

const getRandomColor = () => {
    const randomIndex = Math.floor(Math.random() * color.length)
    return color[randomIndex]
}

const scrollScreen = () => {
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: "smooth"
    })
}

const processMessage = ({ data }) => {

    const { userID, userName, userColor, content } = JSON.parse(data)

    const message = userID == user.id ? createMessageSelfElement(content) : createMessageOtherElement(content, userName, userColor)

    chatMessages.appendChild(message)

    scrollScreen()
}

const handleSubmit = (event) => {
    event.preventDefault()

    user.id = crypto.randomUUID()
    user.name = loginInput.value
    user.color = getRandomColor()

    login.style.display = "none"

    chat.style.display = "flex"

    websocket = new WebSocket("ws://localhost:8080")
    websocket.onmessage = processMessage

}

const sendMessage = (event) => {
    event.preventDefault()


    const message = {
        userID: user.id,
        userName: user.name,
        userColor: user.color,
        content: mensagemEscolhida.value
    }

    websocket.send(JSON.stringify(message))
}

loginForm.addEventListener("submit", handleSubmit)
chatForm.addEventListener("submit", sendMessage)

