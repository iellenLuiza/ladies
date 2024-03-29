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
    <title>Ladies</title>
    <link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/cabecalho-rodape.css">
    <script src="assets/javascript/index.js" defer></script>
    <script src="assets/javascript/cabecalho-rodape.js" defer></script>
</head>

<body>
<!--Teste se consegui mover o diretório para o xamp-->
    
    <!-- Cabeçalho -->
    <?php include "./includes/header.php"?>
    <!-- fim cabeçalho -->


    <!-- Corpo -->
    <main>

        <!--Carrossel-->
        <section class="slider">
            <div class="slides">

                <!--Radio Buttons-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">


                <!--Slide-->

                <!--Slide_1-->
                <div class="slide first" class="slide">
                    <a class="linkSlide" href="telaPublicacao.php">
                        <img src="assets/img/imgsCarrossel/ada.png" alt="primeira imagem carrossel" class="imgSlid" />
                        <div class="inforSlide">
                            <h2 class="titSlide">Ada Lovelace</h2>
                            <h3 class="mancheteSlide">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Totam
                                excepturi, quos neque enim praesentium modi assumenda.</h3>
                        </div>
                    </a>

                </div>

                <!--Slide_2-->
                <div class="slide">
                    <a class="linkSlide" href="telaPublicacao.php">
                        <img src="assets/img/imgsCarrossel/eniac.png" alt="segunda imagem carrossel" class="imgSlid" />
                        <div class="inforSlide">
                            <h2 class="titSlide">ENIAC</h2>
                            <h3 class="mancheteSlide">Lorem ipsum dolor, sit amet consectetur adipisicing elit
                                consectetur adipisicing elit</h3>
                        </div>
                    </a>
                </div>

                <!--Slide_3-->
                <div class="slide">
                    <a class="linkSlide" href="telaPublicacao.php">
                        <img src="assets/img/imgsCarrossel/grace.png" alt="terceira imagem carrossel" class="imgSlid" />
                        <div class="inforSlide">
                            <h2 class="titSlide">Grace Hopper</h2>
                            <h3 class="mancheteSlide">Lorem ipsum dolor, sit amet consectetur adipisicing eli lorem
                                ipsum dolor, sit amet consectetur adipisicing elit.</h3>
                        </div>
                    </a>
                </div>

                <!--Slide_4-->
                <div class="slide">
                    <a class="linkSlide" href="telaPublicacao.php">
                        <img src="assets/img/imgsCarrossel/katherine.png" alt="quarta imagem carrossel"
                            class="imgSlid" />
                            <div class="inforSlide">
                                <h2 class="titSlide">Katherine Johnson</h2>
                                <h3 class="mancheteSlide">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                    Totam
                                    excepturi.</h3>
                            </div>
                    </a>
                </div>
                <!--Fim Slide imagens-->

                <!--Navigation auto-->
                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>

                <!--Navigation manual-->
                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>

            </div>
        </section>
        <!--fim carrossel-->

        <!--Sessões-->
        <div class="conteinerSessoes">


            <!--Quem somos-->
            <section class="divQuemSomos">
                <div class="divQuemSomosInter">
                    <h2>Quem somos ...</h2>
                    <div class="divSubFlexQuemSomos">
                        <div class="divParagraSomos">
                            <p>Olá, nós somos o grupo DeBuggLadies! Estudantes do curso Técnico em Informática do
                                Instituto
                                Federal Campus Bom Jesus da Lapa, nosso grupo é formado por cinco meninas e nossos nomes
                                são:
                                Adriane Leite, Camilly Carvalho, Geislane Borges, Iellen Mendes e
                                Samille Zetole.
                            </p><br>
                            <p>
                                No segundo ano no Ensino médio, nossa professora de uma disciplina do curso
                                técnico
                                surgiu
                                com
                                um projeto tecnológico com o propósito de ajudar a resolver
                                algum
                                problema social, sendo assim, após algumas pesquisas e de percebermos a enorme
                                desigualdade
                                de
                                gêneros na Informática, uma integrante do nosso grupo, Iellen, teve a ideia de criar um
                                site,
                                com o
                                objetivo de compartilhar, ou seja, dar mais visibilidade a histórias de mulheres na
                                informática,
                                para que assim, de algum modo, pudéssemos inspirar a entrada de mais mulheres nessa
                                área.
                                Então
                                com
                                a ajuda de nossa professora Danyele, escolhemos fazer esse site, entre outras ideias que
                                foram
                                apresentadas
                                por nós.
                            </p>
                        </div>
                        <img src="assets/img/joaninha2.png" alt="desenho da joaninha logo do projeto" width="370vw">
                    </div>
                </div>
            </section>

            <!--fim quem somos-->

            <!--Sugestões-->
            <section class="divSuges"><!--Div que engloba o titulo e parte dos cards-->

                <h2>Conheça algumas histórias</h2>

                <div class="divConteinerSuges"><!--Div que deixa os tres cards lado a lado-->

                    <!--Card_1-->
                    <div class="divCardSuges" id="cardSugesUm">
                        <div class="divCardSugesInterno">
                            <h3>Carol Shaw</h3>
                            <img src="assets/img/imgsSugestoes/carol.png" alt="imagem sugestão 1" width="80%">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque labore excepturi,
                                accusantium
                                repellat iure.</p>
                        </div>
                        <a href="telaPublicacao.php"><b>Veja mais</b></a>
                    </div>

                    <!--Card_2-->
                    <div class="divCardSuges">
                        <div class="divCardSugesInterno">
                            <h3>Danyele de Oliveira</h3>
                            <img src="assets/img/imgsSugestoes/dany.png" alt="imagem sugestão 2" width="80%">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque labore excepturi,
                                accusantium
                                repellat iure.</p>
                        </div>
                        <a href="telaPublicacao.php"><b>Veja mais</b></a>
                    </div>

                    <!--Card_3-->
                    <div class="divCardSuges">
                        <div class="divCardSugesInterno">
                            <h3>Camila Achutti</h3>
                            <img src="assets/img/imgsSugestoes/camila.png" alt="imagem sugestão 3" width="80%">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque labore excepturi,
                                accusantium
                                repellat iure.</p>
                        </div>
                        <a href="telaPublicacao.php"><b>Veja mais</b></a>
                    </div>

                </div>
            </section>
            <!--fim sugestões-->

            <!--Envie-->
            <section class="divEnvieHist">
                <h2 id="titEnviarHist">Envie sua história</h2>
                <div class="divSubFlexEnvie">
                    <img src="assets/img/maquinaEscrever.png" alt="desenho da joaninha logo do projeto"
                        width=400vw"><!--Imagem provisória da internet-->
                    <div class="divParagraEnvie">
                        <p>Este aqui é um espaço para que você faça sua contribuição com nosso site. Você ao clicar no
                            botão
                            "Enviar história" será direcionado para uma página onde poderá anexar um arquivo com a sua
                            indicação de história ou a história já escrita. Enviar a história não significa que ela será
                            aceita ou postada assim como foi enviada. Ao enviar sua história nós, do Bug Ladies, iremos
                            revisar a história e podemos recusar ou aceitar e modificá-la para postar, iremos conferir
                            todas
                            as informações presentes na história e caso recusada, o motivo será explicado a você.
                            Entretanto, se a história que você escreveu for publicada, nós lhe daremos os créditos.
                        </p>
                        <button id="btnEnviar"><a href="telaCriarManterPubli.php">Enviar história</a></button>
                    </div>
                </div>
            </section>
            <!--fim envie-->

        </div>
        <!--fim sessões-->

    </main>
    <!-- fim corpo -->


    <!-- Rodapé -->
    <?php include "./includes/footer.php"?>
    <!-- fim rodape -->

</body>

</html>
