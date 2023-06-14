<header>

        <div class="logo-nav">
            <!--Logo-->
            <a class="logo" href="index.php"><img src="assets/img/Logo_info3ANO_versao1-ie.png" width="100%"
                    alt="logo localizada cabeçalho"></a>

            <!--Barra de navegação-->
            <nav>

                <!--Botões-->
                <a href="index.php" class="btnNav">Início</a>
                <a href="telaCriarManterPubli.php" class="btnNav">Enviar história</a>
                <a href="#" class="btnNav">Eventos</a>
                <?php
                if (!empty($_SESSION)) {
                    echo "<a href='logout.php' class='btnNav'>Sair</a>";
                }
                ?>

                <!--Caixa de pesquisa-->
                <form action=" ">
                    <input class="inpPesq" type="search" name="busca" maxlength="100"
                        placeholder="Pesquise uma história...">
                    <button id="btnPesq" type="button"><img src="assets/img/icons8-pesquisar.svg" width="27px"
                            alt="botão de buscar"></button>
                </form>

                <?php
                if (!empty($_SESSION)) {
                    echo "<a href='telaPerfil.php' class='btnEntrar'>Ver Perfil</a>";
                }else{
                    echo"<a href='telaLoginCadastro.php' class='btnEntrar'>Entrar</a>";
                }
                ?>
                

            </nav>
        </div>

        <!--Faixa-->
        <div class="faixa"></div>

    </header>