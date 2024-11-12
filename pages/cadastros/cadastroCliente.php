<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://fonts.googleapis.com/css?family=Fredoka' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../../assets/css/cadastros/cadastroCliente.css">
    <link rel="stylesheet" href="../../assets/css/Header.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <title> Simbas PetShop - Cadastro Cliente </title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="contatos-header">
                <div class="sociais-header">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                </div>
                <div class="telefone-header">
                    <p> Telefone (18) 99744-5149 </p>
                </div>
            </div>

            <hr id="separacao-linha">
            <div class="div-principal">
                <div class="div-pesquisa">
                    <input type="text" placeholder="O que você está buscando?">
                    <button> <i class="fa-solid fa-magnifying-glass"></i></button>
                </div>

                <div class="div-logo">
                    <img src="../../assets/images/LOGO.png" alt="">
                </div>

                <div class="div-icone">
                    <a href="../../pages/perfil.php">
                        <i class="fa-regular fa-user"></i>
                        <p> Minha Conta </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <ul>
                <li> <a href="../verAnimais.php"> INICIO </a> </li>
                <li> <a href="../agendamento.php"> AGENDAMENTOS </a> </li>
                <li> <a href="../perfil.php"> MEUS PETS </a> </li>
            </ul>
        </div>
    </header>

    <!-- Div principal -->
    <div class="div-content">
        <h1> CRIAR UMA CONTA </h1>

        <form method="POST" action="../../processing/cadastros/cadastroUser.php">
            <div class="conjunto">
                <label>Nome completo:</label><br>
                <input type="text" placeholder="Nome" name="nome">
            </div>
            <div class="conjunto">
                <label>E-mail:</label><br>
                <input type="email" placeholder="E-mail" id="email" name="email">
            </div>
            <div class="conjunto">
                <label>Telefone: (opcional)</label><br>
                <input type="text" placeholder="Telefone" id="telefone" name="telefone">
            </div>
            <div class="conjunto">
                <label>Senha:</label><br>
                <input type="password" placeholder="Senha" id="senha" name="senha">
            </div>
            <div class="conjunto">
                <label>Confirmar senha:</label><br>
                <input type="password" id="confirmar" placeholder="Confirmar senha" name="confirmarSenha">
            </div>
            <input type="submit" value="CRIAR UMA CONTA" id="criar">
        </form>
        <span>Já possui uma conta? <a href="../login.php">Iniciar sessão</a></span>
    </div>

    <!-- Footer -->

    <footer>
        <div class="footer-content">
            <div class="footer-departamentos">
                <h3> Departamentos </h3>
                <ul>
                    <li> <a href="../verAnimais.php"> Início </a> </li>
                    <li> <a href=""> Quem Somos </a> </li>
                    <li> <a href=""> Produtos </a> </li>
                    <li> <a href=""> Política de Comercialização </a> </li>
                </ul>
            </div>

            <div class="footer-contatos">
                <h3> Entre em contato </h3>
                <ul>
                    <li>
                        <div id="div-config-icones">
                            <i class="fa-brands fa-square-whatsapp"></i>
                            <p> 55 (18) 3916-6823 </p>
                        </div>
                    </li>
                    <li>
                        <div id="div-config-icones">
                            <i class="fa-solid fa-square-phone"></i>
                            <p> 55 (18) 99744-5149 </p>
                        </div>
                    </li>
                    <li>
                        <div id="div-config-icones">
                            <i class="fa-solid fa-envelope"></i>
                            <p> simbaspetshop@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="footer-rede-social">
                <h3> Permaneça conectado </h3>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-square-x-twitter"></i>
            </div>
        </div>

        <hr id="separacao-linha">
        <div class="grid-pagamento-envio">
            <div class="grid-img-pagamento-envio">
                <h3> Meio de pagamento </h3>
                <img src="../../assets/images/Boleto.Icon.png" alt="Boleto">
                <img src="../../assets/images/Elo_Icon.png" alt="Elo">
                <img src="../../assets/images/Mastercard_Icon.png" alt="MasterCard">
                <img src="../../assets/images/Pix_Icon.png" alt="Pix">
                <img src="../../assets/images/Visa_Icon.png" alt="Visa">
            </div>
            <div class="grid-img-pagamento-envio">
                <h3> Meios de envio </h3>
                <img src="../../assets/images/Correrios_Icon.png" alt="Correios">
                <img src="../../assets/images/Sedex_Icon.png" alt="Sedex">
            </div>
        </div>

        <p id="texto-copyright"> Copyright Zoe Marketing Empresarial Ltda 2331735000165 - 2023. Todos os direitos
            reservados. </p>
    </footer>
</body>

</html>