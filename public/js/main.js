const parametros = new URLSearchParams(window.location.search)
const tipoMensagem = parametros.get("mensagem")

const notificacao = document.createElement("div")

if (tipoMensagem === "sucesso") {
    notificacao.innerHTML = "Operação realizada com sucesso"
    notificacao.className = "notificacao sucesso"
} else if (tipoMensagem === "erro") {
    notificacao.innerHTML = "Erro ao realizar operação"
    notificacao.className = "notificacao erro"
}

document.body.appendChild(notificacao)

const urlSemParametro = window.location.pathname
window.history.replaceState(null, "", urlSemParametro)

setTimeout(function () {
    notificacao.remove()
}, 2000)