























// const form = document.getElementById('form')
// const password = document.getElementById('password')
// const passwordTwo= document.getElementById('passwordTwo')


// form.addEventListener('submit'), (e) => {
//     e.preventDefault()

//     checkInputs() 

//     }

// function checkInputs() {

//     const passwordValue = password.value.trim()
//     const passwordTwoValue = passwordTwo.value.trim()

//     if(passwordValue === '') {
//         // mostrar o erro
//         // adicionar a classe error
//         erroValidation(password, 'Preencha esse campo!')
//     }
// }

// function erroValidation(input, menssage) {
//     const formControl = input.parentElement;

//     const small = formControl.querySelector('small')

//     small.innerText = menssage

//     formControl.className = 'form-control error'
// }







// function confereSenha() {
//     const senha = document.querySelector('input[name=senha]');
//     const confirma = document.querySelector('input[name=confirma]');
//     if (confirma.value === senha.value) {
//         confirma.setCustomValidity('');
//     } else {
//         confirma.setCustomValidity('As senha não conferem. Tente novamente.')
//     }
// }