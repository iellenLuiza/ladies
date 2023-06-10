<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
    <link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/telaRecuperarsenha.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cabecalho_alternativo_recuperarsenha.css">
</head>
<header>
    <a href="index.php"><img id="logo" src="assets/img/Logo_info3ANO_versao1-ie.png"  width="19%" alt="logo localizada cabeçalho">
    </a>
    <nav>
        <a href="telaLoginCadastro.php" id="btnNavDestaque">Entrar</a>
    </nav>
</header>

<main class="container">
    <h1 id="recuperar">Recuperar Senha</h1>
    <div>
        <form  action="telaRecuperar2.php">
            <p>Informe seu e-mail e enviaremos instruções para você criar sua senha.</p>

            <label class="label_form">Email <br> 
                <input class="input_form" type="email" autocomplete="off" required placeholder="Digite seu email" name="email"></label>

                <input id="botaoRecuperar" type="submit" value="Receber e-mail">
        </form>

    </div>
</main>


</body>
</html>