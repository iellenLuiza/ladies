<?php
session_start();
//conecta com banco
include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil | Nome usuário</title>
    <link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/cabecalho-rodape.css">
    <link rel="stylesheet" type="text/css" href="assets/css/telaPerfil.css">
    <script src="assets/javascript/telaPerfil.js" defer></script>
    <script src="assets/javascript/cabecalho-rodape.js" defer></script>
</head>

<body>

    <!-- Cabeçalho -->
    <?php include "./includes/header.php"?>
    <!-- fim cabeçalho -->

    <!-- Corpo -->
    <main>
        <!-- dados do usuário -->
        <section>
            <h1>Perfil de Usuário</h1>
            <form action="" method="post">
                <!-- foto do perfil e email -->
                <div class="foto_email">
                    <img src="assets/img/perfil.png" alt="imagen-perfil-usu" id="fotoPerfil">
                    <label id="btnAlterarFoto" for="alteFoto">Alterar foto de perfil</label>
                    <input id="alteFoto" value="alteFoto" type="file">
                    <input type="text" id="email_usu_perfil" name="email_usu_perfil" value="Provisório@email.com.br"
                        disabled>
                </div>

                <!-- nome, data nascimento, sexo e botões [outros dados]-->
                <div class="outros_dados">
                    <!-- nome do usuário -->
                    <label for="nome_usu_perfil" class="titPerUsu">Nome:</label>
                    <input type="text" id="nome_usu_perfil" maxlength="100" minlength="5" name="nome_usu_perfil" placeholder="Digite seu nome"
                        required>
                    <br>
                    <!-- data nascimento do usuário -->
                    <label for="nas_usu_perfil" class="titPerUsu">Data de nascimento:</label>
                    <input type="date" id="nas_usu_perfil" name="nas_usu_perfil" required>
                    <!-- sexo do usuário -->
                    <br>
                    <label class="titPerUsu">Sexo:</label>
                    <div id="opSex">
                    <input type="radio" id="sex_usu_perfil_fem" name="sex_usu_perfil" value="feminino">
                    <label for="sex_usu_perfil_fem" class="opSexUsu">Feminino</label>
                    <input type="radio" id="sex_usu_perfil_mas" name="sex_usu_perfil" value="masculino">
                    <label for="sex_usu_perfil_mas" class="opSexUsu">Masculino</label>
                    <input type="radio" id="sex_usu_perfil_naoInformar" name="sex_usu_perfil" value="naoInformar">
                    <label for="sex_usu_perfil_naoInformar" class="opSexUsu">Prefiro não informar</label>
                </div>
                    <!-- botões -->
                    <br><br>
                    <button id="btnEditarPerfil">Editar</button>
                    <input type="submit" id="btnSalvarPerfil" value="Salvar">
                </div>
            </form>
        </section>
        <!-- fim dados do usuário -->

        <!-- listas de histórias salvas e enviadas -->
        <section>

            <select name="listas_usu" id="opListas">
                <option value="0" selected><h2>Salvas</h2></option>
                <option value="1"><h2>Enviadas</h2></option>
            </select>

            <div id="conteiner_salvas">
                <div class="card_salvas_usu">
                    <h3>Nome história salva</h3>
                    <img src="assets/img/imgsSugestoes/Camila.png">
                </div>

                <div class="card_salvas_usu">
                    <h3>Nome história salva</h3>
                    <img src="assets/img/imgsSugestoes/Camila.png">
                </div>

                <div class="card_salvas_usu">
                    <h3>Nome história salva</h3>
                    <img src="assets/img/imgsSugestoes/Camila.png">
                </div>

                <div class="card_salvas_usu">
                    <h3>Nome história salva</h3>
                    <img src="assets/img/imgsSugestoes/Camila.png">
                </div>
            </div>

            <div id="conteiner_enviadas">
                <div class="card_enviadas_usu">
                    <h3>Nome história enviada</h3>
                    <img src="assets/img/imgsSugestoes/Camila.png">
                </div>

                <div class="card_enviadas_usu">
                    <h3>Nome história enviada</h3>
                    <img src="assets/img/imgsSugestoes/Camila.png">
                </div>

                <div class="card_enviadas_usu">
                    <h3>Nome história enviada</h3>
                    <img src="assets/img/imgsSugestoes/Camila.png">
                </div>
                <div class="card_enviadas_usu">
                    <h3>Nome história enviada</h3>
                    <img src="assets/img/imgsSugestoes/Camila.png">
                </div>
            </div>
        </section>
        <!-- fim listas de histórias salvas e enviadas -->

    </main>
    <!-- fim corpo -->

    <!-- Rodapé -->
    <?php include "./includes/footer.php"?>
    <!-- fim rodape -->
</body>

</html>