<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/telaLoginCadastroAdm.css">
    <title>Login Administrador</title>
</head>
<body>

    <main class="container">
        <h1 id="recuperar">Login Administrador</h1>
        <div>
            <form  action="TeladeCadastroAdm.html">
               
    
                <label class="label_form">Email <br> 
                    <input class="input_form" type="email" autocomplete="off" required placeholder="Digite seu email" name="email"></label>

                    <div class="form_control">
                        <label class="label_form">Senha <br><input id="password" class="input_form" type="password" autocomplete="off" placeholder="Digite sua senha" name="senha" required></label>
                        <br>
                        <small>error menssage</small>
                     </div>

                     <a href="" class="social-text">Esqueceu sua senha?</a>
    
                    <input id="botaoRecuperar" type="submit" value="Receber e-mail">

            </form>
    
        </div>
    </main>
    
</body>
</html>