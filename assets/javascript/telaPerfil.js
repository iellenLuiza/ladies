// Função de exibir ou não histórias salvas e histórias enviadas
// pegar os elementos
var opcao = document.querySelector("#opListas");
var conteinerSalvos = document.querySelector("#conteiner_salvas");
var conteinerEnviados = document.querySelector("#conteiner_enviadas");

// função pegar qual opção está selecionada e de acordo ela exibe ou não
function exibiLista() {
    // verifica o valor selecionado, se for 0 irá exibir a lista de itens salvos e se for 1(não for 0) irá exibir a lista de histórias enviadas
    if (this.value == "0") {
        conteinerSalvos.style.display = 'flex';
        conteinerEnviados.style.display = 'none';
    } else {
        conteinerSalvos.style.display = 'none';
        conteinerEnviados.style.display = 'flex';
    }
}

// adiciona função ao selecionar opção
opcao.addEventListener("change", exibiLista);