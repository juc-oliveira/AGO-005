<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href='https://fonts.googleapis.com/css?family=Fredoka' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="../../assets/css/cadastros/cadastroAdocao.css">
    <link rel="stylesheet" href="../../assets/css/header.css">
    <link rel="stylesheet" href="../../assets/css/footer.css">
    <title>Simbas PetShop</title>
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
                    <a href="../perfil.php">
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
        <h1>ADICIONAR PET PARA ADOÇÃO</h1>

        <div class="div-form">

        <form method="POST" action="../../processing/cadastros/cadastroAdocao.php">
    <div class="conjunto">
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Nome">
    </div>
    <div id="tres">
        <div class="conjunto">
            <label>Sexo</label><br>
            <select name="sexo" id="sexo">
                <option value="">Selecione</option>
                <option value="fem">Feminino</option>
                <option value="masc">Masculino</option>
            </select>
        </div>
        <div class="conjunto">
            <label>Pelo</label><br>
            <select name="pelo" id="pelo">
                <option value="">Selecione</option>
                <option value="curto">Curto</option>
                <option value="medio">Médio</option>
                <option value="comprido">Comprido</option>
            </select>
        </div>
        <div class="conjunto">
            <label>Cor do pelo</label><br>
            <input type="text" name="cor_pelo" id="cor-pelo" placeholder="Cor do pelo">
        </div>
    </div>

    <div class="conjunto">
        <label>Tipo</label><br>
        <select name="tipo" id="tipo">
            <option value="">Selecione</option>
            <option value="cachorro">Cachorro</option>
            <option value="gato">Gato</option>
        </select>
    </div>

    <div class="conjunto">
        <label>Porte</label><br>
        <select name="porte" id="porte">
            <option value="">Selecione</option>
            <option value="pequeno">Pequeno</option>
            <option value="medio">Médio</option>
            <option value="grande">Grande</option>
        </select>
    </div>

    <div class="conjunto">
        <label>Raça</label><br>
        <input type="text" name="raca" placeholder="Raça" id="raca">
    </div>
    <div class="conjunto">
        <label>Temperamento</label><br>
        <input type="text" name="temperamento" placeholder="Temperamento" id="temperamento">
    </div>
    <div class="conjunto">
        <label>Situação</label><br>
        <input type="text" name="situacao" placeholder="Situação" id="situacao">
    </div>
    <div class="conjunto">
        <label>Observação</label><br>
        <input type="text" name="observacao" id="observacao" placeholder="Observação">
    </div>
    <br>

    <div id="foto-perfil">
        <span>Escolher uma foto de perfil para o pet</span><br>
        <input type="file" name="foto" required>
    </div>
    <br>
    <input type="submit" value="ADICIONAR PET PARA ADOÇÃO" id="adicionar">
</form>
