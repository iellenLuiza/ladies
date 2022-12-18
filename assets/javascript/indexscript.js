/* --------------- SLIDE --------------- */
let count = 1;
document.getElementById("radio1").checked = true;

/* Ativa o negócio de passar as imagens do carrossel de 5 em 5 segundo */
setInterval(function () {
    nextImag();
}, 5000)

/* Passa as imagens do carrossel*/
function nextImag() {
    count++;
    if (count > 4) {
        count = 1;
    }

    document.getElementById("radio" + count).checked = true;
}
/* ------------------------------------- */

/* ---------- FIXAR CABEÇALHO ---------- */
const header=document.getElementsByTagName("header")[0];// Pega o header
const nav=document.getElementsByTagName("nav")[0];//Pega a nav 
const alturaTopo=nav.offsetTop;//Usa o topo do elemento nav como critério de altura para chamar a função de fixar

let a = document.querySelector('#idCabeImg')
    a.setAttribute('href', '#comeco')

// chama função de fixar ao rolar a tela
window.onscroll=function(){
    fixarNoTopo();
}

// função de fixar muda alguns critérios para fixar o cabeçalho
function fixarNoTopo(){
    if(window.pageYOffset >= alturaTopo){
        header.classList.add("fixoTopo");
        document.querySelector('#idCabeImg').style.width = '12%';
        document.querySelector('#divFaixa').style.height = '12px';
        document.querySelector('#inicio').style.padding = '1px';
        document.querySelector('nav').style.transform = 'scale(0.8)';
        document.querySelector('nav').style.margin = '10px';
    }else{
        header.classList.remove("fixoTopo");
        document.querySelector('#idCabeImg').style.width = '21%';
        document.querySelector('#divFaixa').style.height = '30px';
        document.querySelector('nav').style.transform = 'scale(1)';
        document.querySelector('#inicio').style.padding = '20px';
        document.querySelector('nav').style.marginLeft = 'auto';
        document.querySelector('nav').style.marginTop = 'auto';
    }
}

/* ------------------------------------- */