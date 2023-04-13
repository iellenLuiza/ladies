/* ---------- FIXAR INTERAÇÕES LATERAIS ---------- */
const inter=document.getElementById("interacoes");
const refB = document.getElementsByClassName("comentario-vejaMais")[0];
const ref=document.getElementsByClassName("conteiner")[0];
const alturaRef=ref.offsetTop;
const alturaRefB=refB.offsetTop;

window.onscroll=function(){
    fixarInter();
}
// função de fixar muda alguns critérios para fixar o cabeçalho
function fixarInter(){
    if(window.pageYOffset >= alturaRef){
        inter.classList.add("fixarInter");
    }else{
        inter.classList.remove("fixarInter");
    }
} //Tem que ajustar para quando chegar no fim do texto "subir" dnv
/* ------------------------------------- */