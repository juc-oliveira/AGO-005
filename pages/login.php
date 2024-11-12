<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap">
    <link rel="stylesheet" href="../assets/css/login.css">
    <title>Simbas PetShop</title>
</head>

<body>
    <div id="logo">
        <img src="../assets/images/LOGO.png" alt="">
    </div>
    
    <div class="div-content">
        
        <h1>INICIAR SESSÃO</h1>

        <form method="POST" action="../processing/login.php">
            <div class="conjunto">
                <label>E-mail:</label><br>
                <input type="email" placeholder="E-mail" id="email" name="email">
            </div>
            <div class="conjunto">
                <label>Senha:</label><br>
                <input type="password" placeholder="Senha" id="senha" name="senha">
            </div>
            <input type="submit" value="INICIAR SESSÃO" id="login">
        </form>
        <span>Não possui uma conta ainda? <a href="./cadastros/cadastroCliente.php">Criar uma conta</a></span>
    </div>

</body>



</html>