<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/telaLoginCadastro.css">
    <title>Entrar</title>
	<link rel="icon" href="assets/img/icone_info3ANO_versao-alternativa.ico">
</head>

<body>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/telaLoginCadastro.css" />
    <title>Sign in & Sign up Form</title>
    </head>

    <body>
        <!--Inicio da Tela Login-->
        <div class="container"> 
            <div class="forms-container">
                <div class="signin-signup">
                    <form action="#" class="sign-in-form">
                        <!--Cabeçalho da tela-->
                        <h2 class="title">Login</h2>
                        <!--Campo e-mail de usuário-->
                        <div class="input-field">
                            <i class="fas fa-user"></i> <!--icone-->
                            <input  type="email" placeholder="Digite seu e-mail" />
                        </div>
                          <!--Campo senha-->
                        <div class="input-field">
                            <i class="fas fa-lock"></i><!--icone-->
                            <input type="password" placeholder="Digite sua senha" />
                        </div>
                        <!--Link para abertura da tela de esqueceu senha-->
                        <a href="telarecuperar.html" class="social-text">Esqueceu sua senha?</a>

                        <!--Botão login-->
                        <input type="submit" value="Login" class="btn solid" />

                        <!--botão de login com google-->
                        <div class="social-media">
                            <button class="social-icon" type="submit">
                            <i class="fab fa-google me-2"></i><!--icone-->
                             Faça login com Google</button>
                        </div>
                    </form>
                     <!--Final da tela de Login-->     

                    
                    <!--Inicio da tela de cadastro-->
                    
                    <form action="#" class="sign-up-form">

                        <h2 class="title">Cadastro</h2>
                        <div class="input-field">
                            <i class="fas fa-user"></i><!--icone-->
                            <input type="text" placeholder="Digite seu nome" />
                        </div>
                        
                        <div class="input-field">
                            <i class="fas fa-envelope"></i><!--icone-->
                            <input style="color: #acacac;" type="date" required value="data_nac" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i><!--icone-->
                            <input type="email" placeholder="Digite seu e-mail" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i><!--icone-->
                            <input type="password" placeholder="Digite sua senha" />
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i><!--icone-->
                            <input type="password" placeholder="Confirme sua senha" />
                        </div>
                        <div class="input-fie">
                            <p>Sexo:
                                <input required type="radio" name="f" value="Feminino"> Feminino
                                <input required type="radio" name="f" value="M"> Masculino
                                <input required type="radio" name="f" value="p"> Prefiro não informar

                            </p>
                        </div>
                        <input type="submit" class="btn" value="Cadastrar" />

                        <div class="social-media">
                            <button class="social-icon" type="submit">
                            <i class="fab fa-google me-2"></i><!--icone-->
                            Cadastrar com  conta Google</button>
                        </div>

                    </form>
                </div>
            </div>
                <!--Final da tela de Cadastro-->


            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Novo Aqui?</h3>
                        <p>
                            Venha fazer parte do nosso time! Cadastre-se no nosso site e venha conhecer um pouco mais sobre
                            a importância das mulheres na Informática.
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            Cadastro
                        </button>
                    </div>
                    <img src="assets/img/imgtelalogin.png" class="image" alt=""  />
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3> Já é um de nós?</h3>
                        <p>
                            Faça login no nosso site para uma melhor interação.
                        </p>
                        <button class="btn transparent" id="sign-in-btn">
                            Login
                        </button>
                    </div>
                    <img src="assets/img/Literature-pana.png" class="image" alt="" />
                </div>
            </div>
        </div>

        <script src="assets/javascript/telaLoginCadastro.js"></script>
    </body>

</html>