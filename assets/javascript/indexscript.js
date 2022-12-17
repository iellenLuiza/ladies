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

const nav=document.getElementsByTagName("header")[0];
const img=document.getElementsByTagName("img")[0];
const topoCabe=header.offsetTop;

window.onscroll=function(){
    fixarNoTopo();
}

function fixarNoTopo(){
    if(window.pageYOffset >= topoCabe){
        nav.classList.add("fixoTopo");
        img.classList.add("cabeImg");
    }else{
        nav.classList.remove("fixoTopo");
        img.classList.remove("cabeImg");
    }
}

/* ------------------------------------- */