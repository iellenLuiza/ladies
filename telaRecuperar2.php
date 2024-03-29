<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir senha</title>
    <link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/telaRecuperarsenha.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cabecalho_alternativo_recuperarsenha.css">
</head>

<body>
    <div class="wrapper">
    <header>
        <a href="index.php"><img id="logo" src="assets/img/Logo_info3ANO_versao1-ie.png" alt="logo localizada cabeçalho"></a>

        <nav class="nav">
            <a href="telaLoginCadastro.php" id="btnNavDestaque">Entrar</a>
        </nav>
    </header>

    <main class="container">
        <h1 class="titulo">Redefinir Senha</h1>
   
           <div>
           <form class="form" id="form" action="#">

            <div class="form_control">
               <label class="label_form">Senha<br><input id="password" class="input_form" type="password" autocomplete="off" placeholder="Digite sua senha" name="senha" required></label>
               <br>
              
            </div>

            <div class="form_control" >
               <label class="label_form">Confirmar senha <br> <input id="passwordTwo"class="input_form" type="password" autocomplete="off" placeholder="Confirme sua senha" name="confirma" required></label>
               <br>
              
            </div>
               <input id="botaoRedefinir" type="submit" value="Cadastrar">
           </form>
           </div>
           <script src="./assets/javascript/telarecuperar.js"></script> 
</main>
</div>
</body>

</html>