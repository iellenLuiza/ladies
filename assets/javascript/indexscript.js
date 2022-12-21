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
        document.querySelector('#idCabeImg').style.transform = 'scale(0.6)';
        document.querySelector('#idCabeImg').style.marginLeft = '-2.8vw';
        document.querySelector('#idCabeImg').style.marginTop = '-1vh';
        document.querySelector('#idCabeImg').style.marginBottom = '-1.7vh';
        document.querySelector('#idCabeImg').style.marginRight = '-5vw';
        document.querySelector('#inicio').style.padding = '0px';
        //document.querySelector('#idCabeImg').style.width = '12%';
        document.querySelector('#divFaixa').style.height = '1vw';
        document.querySelector('nav').style.transform = 'scale(0.85)';
        document.querySelector('nav').style.marginLeft = '0';
        document.querySelector('nav').style.marginRight = 'auto';
        document.querySelector('nav').style.marginTop = 'auto';
        document.querySelector('nav').style.marginBottom = 'auto';
    }else{
        header.classList.remove("fixoTopo");
        document.querySelector('#idCabeImg').style.transform = 'scale(1)';
        document.querySelector('#idCabeImg').style.margin = '0px';
        //document.querySelector('#idCabeImg').style.width = '21%';
        document.querySelector('#divFaixa').style.height = '2vw';
        document.querySelector('nav').style.transform = 'scale(1)';
        document.querySelector('#inicio').style.padding = '1.5vw';
        document.querySelector('nav').style.marginLeft = 'auto';
        document.querySelector('nav').style.marginRight = '0';
        document.querySelector('nav').style.marginTop = 'auto';
        document.querySelector('nav').style.marginBottom = '0';
    }
}

/* ------------------------------------- */