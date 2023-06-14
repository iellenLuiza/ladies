const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

// ----- VERIFICA SE SENHAS TÃO IGUAIS ----- //
var senhaUsu = document.querySelector("#senhaUsu");
var senhaUsuConf = document.querySelector("#senhaUsuConf");
var aviso = document.querySelector("#aviso");
function checkSenhas() {
  var senha = senhaUsu.value;
  var senhaConf = senhaUsuConf.value;
  //console.log("teste");
  //console.log(senha);
  //console.log(senhaConf);
  if (senha==senhaConf) {
    aviso.innerHTML = "";
  }else{
    aviso.innerHTML = "Senhas não correspondentes!";
  }
}
senhaUsu.addEventListener("blur",checkSenhas);
senhaUsuConf.addEventListener("blur",checkSenhas);
// --------------------------------------------- //