/* ---------- FIXAR CABEÇALHO ---------- */
const header=document.getElementsByTagName("header")[0];// Pega o header
const nav=document.getElementsByTagName("nav")[0];//Pega a nav 
const alturaTopo=nav.offsetTop;//Usa o topo do elemento nav como critério de altura para chamar a função de fixar
// chama função de fixar ao rolar a tela
window.onscroll=function(){
    fixarNoTopo();
}
// função de fixar muda alguns critérios para fixar o cabeçalho
function fixarNoTopo(){
    if(window.pageYOffset >= alturaTopo){
        header.classList.add("fixarTopo");
        document.querySelector('.logo-nav').style.padding = '0';
        document.querySelector('.logo').style.transform = 'scale(0.75)';
        document.querySelector('nav').style.transform = 'scale(0.9)';
        document.querySelector('nav').style.marginTop = 'auto';
        document.querySelector('nav').style.marginBottom = 'auto';
        document.querySelector('nav').style.marginRight = 'auto';
        document.querySelector('nav').style.marginLeft = '-6vh';
        document.querySelector('.faixa').style.marginTop = '-1.7vh';
        document.querySelector('.faixa').style.height = '1.4vh';
    }else{
        header.classList.remove("fixarTopo");
        document.querySelector('.logo-nav').style.padding = '0.8vw';
        document.querySelector('.logo').style.transform = 'scale(1)';
        document.querySelector('nav').style.transform = 'scale(1)';
        document.querySelector('nav').style.marginTop = 'auto';
        document.querySelector('nav').style.marginBottom = '0';
        document.querySelector('nav').style.marginRight = '0';
        document.querySelector('nav').style.marginLeft = 'auto';
        document.querySelector('.faixa').style.height = '3vh';
        document.querySelector('.faixa').style.marginTop = '-0.4vh';
    }
}
/* ------------------------------------- */


/* --------------- Passa SLIDE --------------- */
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
/* ------------------------------------------ */