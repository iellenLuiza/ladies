<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/telaLoginCadastroAdm.css">
    <title>Cadastro Administrador</title>
</head>
<body>

      <main class="container">
        <h1 id="recuperar">Cadastrar novo Administrador</h1>
        <div>

            <form action="">

                        <label class="label_form">Nome <br>
                        <input class="input_nome" type="text" required placeholder="Digite o nome de novo administrador"/>
                    </label>

                <div class="label_fundo">

                    <label class="label_form">Email <br>
                        <input class="input_form" type="email" autocomplete="off" required
                            placeholder="Digite o email do novo administrador" name="email"></label>

                            <div class="data_la">

                            <label  class="label_form">Data Nascimento<br><input class="label_data" type="date" required
                                value="data_nac" /></label>  

                            </div>

                </div>

                <input id="botao_anima" class="botao_cad" type="submit" value="Cadastrar">

            </form>

        </div>
    </main>
    
</body>
</html>