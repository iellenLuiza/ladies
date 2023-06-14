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
    <title>Título da publicação</title>
    <link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/cabecalho-rodape.css">
    <link rel="stylesheet" type="text/css" href="assets/css/telaPublicacao.css">
    <script src="assets/javascript/telaPublicacao.js" defer></script>
    <!--<script src="assets/javascript/cabecalho-rodape.js" defer></script> ! por hora gambiarrra já que não tava ligando-->
</head>

<body>

    <!-- Cabeçalho -->
    <?php include "./includes/header.php" ?>
    <!-- fim cabeçalho -->

    <!-- Corpo -->
    <main>

        <section class="conteiner-topo">
            <h1>Título da publicação</h1>

            <figure>
                <img src="assets/img/imgsCarrossel/katherine.png" alt="alt da imagem" width="95%" height="570vh">
                <figcaption>Legenda</figcaption>
            </figure>
        </section>

        <section class="conteiner"><!-- conteúdo da publicação  -->
            <div class="contePubli">
                <h2 id="manchete">Manchete da publicação</h2>
                <h5>data da publicação</h5>

                <ul class="tags">
                    <li>tag 1</li>
                    <li>tag 2</li>
                    <li>tag 3</li>
                </ul>

                <!-- lembrar que a publicação além de texto vai ter imagens e os tópicos [vê como faz isso] -->
                <h3 id="topicoA">Tópico A</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.
                </p>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.
                </p>

                <h3 id="topicoB">Tópico B</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.
                </p>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.
                </p>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.
                </p>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.
                </p>

                <h3 id="topicoC">Tópico C</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.
                </p>

                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.
                </p>

                <h3 id="topicoD">Tópico D</h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Explicabo
                    deleniti atque ea consequuntur.
                    Reprehenderit laudantium magni dolorem officiis vero sapiente obcaecati eius, impedit libero ipsum
                    nostrum nemo voluptatem ex veritatis.
                </p>

                <h4 id="idAutor">Autor da publicação</h4>
            </div>

            <aside><!-- opções de favoritar, compartilhar e salvar| ancoras para tópicos do texto -->
                <div id="interacoes">
                    <ul>
                        <li><img src="assets/img/heart-vazio.png"></li>
                        <li><img src="assets/img/compartilhar.png"></li>
                        <li><img src="assets/img/salvar.png"></li>
                    </ul>
                    <ol>
                        <li><a href="#topicoA">🐞Tópico A</a></li>
                        <li><a href="#topicoB">🐞Tópico B</a></li>
                        <li><a href="#topicoC">🐞Tópico C</a></li>
                        <li><a href="#topicoD">🐞Tópico D</a></li>
                    </ol>
                </div>
            </aside><!-- fim da parte com opções de favoritar, compartilhar e salvar | ancoras para tópicos do texto -->
        </section><!-- fim conteúdo da publicação  -->

        <div class="comentario-vejaMais">
            <div class="comentario"><!-- Comentários -->
                <h2>Comentários</h2>
                <form name="comentario" action="#">
                    <img src="assets/img/perfil0.png" alt="imagen-perfil-usu">
                    <div class="conteiner-coment-sub">
                        <textarea rows="5" cols="92" name="txtComentario" id="id_comentario" maxlength="650"
                            minlength="2"></textarea>
                        <input type="reset" value="Cancelar" id="btnCan">
                        <input type="submit" value="Publicar" id="btnPub">
                    </div>
                </form>
                <ol>
                    <li>
                        <img src="assets/img/perfil0.png" alt="imagen-perfil-usus" height="100%">
                        <div>
                            <h4>Usuário</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia eaque saepe soluta
                                cumque
                                enim sequi deserunt. Velit, in quasi. Accusamus odio reprehenderit dignissimos, deleniti
                                voluptate tenetur magni voluptas nesciunt rem.</p>
                            <button id="btnVerResp">Ver respostas</button><button id="btnResp">Responder</button>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/perfil0.png" alt="imagen-perfil-usus" height="100%">
                        <div>
                            <h4>Usuário</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia eaque saepe soluta
                                cumque
                                enim sequi deserunt. Velit, in quasi. Accusamus odio reprehenderit dignissimos, deleniti
                                voluptate tenetur magni voluptas nesciunt rem.</p>
                            <button id="btnVerResp">Ver respostas</button><button id="btnResp">Responder</button>
                        </div>
                    </li>
                    <li>
                        <img src="assets/img/perfil0.png" alt="imagen-perfil-usus" height="100%">
                        <div>
                            <h4>Usuário</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia eaque saepe soluta
                                cumque
                                enim sequi deserunt. Velit, in quasi. Accusamus odio reprehenderit dignissimos, deleniti
                                voluptate tenetur magni voluptas nesciunt rem.</p>
                            <button id="btnVerResp">Ver respostas</button><button id="btnResp">Responder</button>
                        </div>
                    </li>
                </ol>
            </div><!-- fim comentários -->
            <article><!-- Veja mais histórias -->
                <h2>Veja mais histórias</h2>
                <div class="card-suges">
                    <a href="telaPublicacao.php">
                        <h3>Título</h3>
                    </a>
                    <img src="assets/img/imgsSugestoes/dany.png">
                </div>
                <div class="card-suges">
                    <a href="telaPublicacao.php">
                        <h3>Título</h3>
                    </a>
                    <img src="assets/img/imgsSugestoes/camila.png">
                </div>
            </article><!-- fim veja mais histórias -->
        </div>

    </main>
    <!-- fim corpo -->

    <!-- Rodapé -->
    <?php include "./includes/footer.php" ?>
    <!-- fim rodape -->

</body>

</html>