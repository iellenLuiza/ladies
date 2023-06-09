<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar publicação</title><!--Título deve mudar de acordo a função-->
    <link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/cabecalho-rodape.css">
    <link rel="stylesheet" type="text/css" href="assets/css/telaCriarManterPubli.css">
    <script src="assets/javascript/cabecalho-rodape.js" defer></script>
    <link rel="stylesheet" href="dist/ui/trumbowyg.min.css"><!--conecta no css da biblioteca-->
</head>

<body>

    <!-- Cabeçalho -->
    <header>

        <div class="logo-nav">
            <!--Logo-->
            <a class="logo" href="#"><img src="assets/img/Logo_info3ANO_versao1-ie.png" width="100%"
                    alt="logo localizada cabeçalho"></a>

            <!--Barra de navegação-->
            <nav>

                <!--Botões-->
                <a href="" class="btnNav">Início</a>
                <a href="" class="btnNav">Enviar história</a>
                <a href="" class="btnNav">Eventos</a>

                <!--Caixa de pesquisa-->
                <form action=" ">
                    <input class="inpPesq" type="search" name="busca" maxlength="100"
                        placeholder="Pesquise uma história...">
                    <button id="btnPesq" type="button"><img src="assets/img/icons8-pesquisar.svg" width="27px"
                            alt="botão de buscar"></button>
                </form>

                <!--Botão entrar-->
                <a href="telaLoginCadastro.html" class="btnEntrar">Entrar</a>

            </nav>
        </div>

        <!--Faixa-->
        <div class="faixa"></div>

    </header>
    <!-- fim cabeçalho -->

    <!-- Corpo -->
    <main>
        <div class="OrientaEnvio">
            <h1>Enviar História</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid id provident reprehenderit consectetur
                porro est nihil enim sequi quisquam debitis! Praesentium est at pariatur modi harum ducimus, ab atque
                quo?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, totam aperiam asperiores esse
                molestiae illo. Laboriosam itaque aspernatur explicabo ab, ullam at natus similique distinctio excepturi
                veniam dicta qui ad?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non impedit reiciendis
                laudantium obcaecati, atque at ab amet eligendi iusto excepturi ad ipsa dignissimos itaque iste corporis
                repudiandae commodi quisquam maiores?</p>
        </div>

        <h2>Crie sua História!</h2>

        <div class="conteinerText">
            <form>
                <label for="idTit">Título:</label>
                <input id="idTit" type="text">
                <br>
                <label for="idMan">Manchete:</label>
                <input id="idMan" type="text">
                <br>
                <label for="idTags">Tags:</label><!--O input não está no formato ideal-->
                <input id="idTags" type="text">
                <br>
                <label for="idHist">História:</label>
                <textarea id="idHist"></textarea>
                <br>
                <label for="idImg" class="btnInsImg">Clique para insirir a imagem da capa</label>
                <input id="idImg" type="file" accept="image/*">
                <br>
                <label for="idLeg">Legenda da imagem:</label>
                <input id="idLeg" type="text">
                <br>
                <input id="btnEnviar" type="button" value="Enviar">
            </form>
        </div>

    </main>
    <!-- fim corpo -->

    <!-- Rodapé -->
    <footer>
        <div class="rodapeInter">

            <div>
                <!--Logo do rodapé-->
                <img src="assets/img/Logo_info3ANO_rodapé_versao1.png" alt="logo localizada rodapé" width="260vw">
                <!--Selo do rodapé-->
                <h5>Copyright &copy; 2023</h5>
            </div>

            <div id="divNomeEquipe-RedesSociais">
                <!--Nome da equipe no rodapé-->
                <h4>DeBuggLadies</h4>

                <!--Icones para redes sociais-->
                <img src="assets/img/gmail_icone.png" alt="icone para o email" width="30vw">
                <img src="assets/img/insta_icone.png" alt="icone para o instagram" width="30vw">
                <img src="assets/img/twitter_icone.png" alt="icone para o twitter" width="30vw">
                <img src="assets/img/youtube_icone.png" alt="icone para o youtube" width="30vw">
                <img src="assets/img/spotify_icone.png" alt="icone para o spotify" width="30vw">
                <img src="assets/img/tiktok_icone.png" alt="icone para o tiktok" width="30vw">

            </div>
        </div>
    </footer>
    <!-- fim rodape -->

    <!-- EDITOR -->

    <!-- conecta com jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- conecta com javascript[tem que tá embaixo do jquery e verificar o endereço] -->
    <script src="dist/trumbowyg.min.js"></script>
    <!-- cria funções no texteare indicado pelo id -->
    <script>
        $('#idHist').trumbowyg({
            btns: [
                ['viewHTML'],
                ['undo', 'redo'], // Only supported in Blink browsers
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ]
        });
    </script>

    <!-- FIM EDITOR -->

</body>

</html>