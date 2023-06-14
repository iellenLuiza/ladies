<?php
session_start();
//conecta com banco
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios</title>
    <link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cabecalho-rodape.css">
    <link rel="stylesheet" href="assets/css/telaReceberHistoria.css">
    <script src="assets/javascript/index.js" defer></script>
    <script src="assets/javascript/cabecalho-rodape.js" defer></script>
</head>

<body>
    <!-- Cabeçalho -->
    <?php include "./includes/header.php"?>
    <!-- fim cabeçalho -->


    <div class="form" id="a">
        <form>
            <input class="pesq" type="search" name="busca" maxlength="100">
            <button id="btnPesq" type="button"><img src="assets/img/icons8-pesquisar.svg" width="27px"
                    alt="botão de buscar"></button>
        </form>
    </div>
    <div class="b" id="b">
        <a href="telaCriarManterPubli.php" class="btnCriarHis">Criar História</a>
        <a href="telaLoginAdm.php" class="btnCadas">Cadastrar Novo Administrador</a>
    </div>

    
    <div class="divcenter">
        <table id="table">
            <tr>
                <th>
                    <p> Nº envio</p>
                </th>
                <th>
                    <p>
                        Tilulo
                    </p>
                </th>
                <th>
                    <p>
                        Usuário
                    </p>
                </th>
                <th>
                    <p>
                        Data de Envio
                    </p>
                </th>
                <th>
                    <p>
                        Ações
                    </p>
                </th>
            </tr>

            <tr>
                <td>1</td>
                <td>História1</td>
                <td>Usuário1</td>
                <td>XX/XX/XXXX</td>
                <td><select class="select">
                        <option value="V">Ver História</option>
                        <option value="A">Aceitar</option>
                        <option value="R">Recusar</option>
                    </select></td>
            </tr>

            <tr>
                <td>2</td>
                <td>História2</td>
                <td>Usuário2</td>
                <td>XX/XX/XXXX</td>
                <td><select class="select">
                        <option value="V">Ver História</option>
                        <option value="A">Aceitar</option>
                        <option value="R">Recusar</option>
                    </select></td>
            </tr>

            <tr>
                <td>3</td>
                <td>História3</td>
                <td>Usuário3</td>
                <td>XX/XX/XXXX</td>
                <td><select class="select">
                        <option value="V">Ver História</option>
                        <option value="A">Aceitar</option>
                        <option value="R">Recusar</option>
                    </select></td>
            </tr>

        </table>
    </div>
</body>

</html>