<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header class="header">
        <div class="headerContainer">
            <div class="headerLogo">
                <a href="index.php"><img src="./imagens/logo.png" alt="Logo"></a>
            </div>
            <div class="btnVoltar">
                <a href="index.php"><p>Voltar</p></a>
            </div>
        </div>
    </header>
    <div class="formContainer">
        <h1 class="h1">Login</h1>
        <form action="logar.php" method="POST" class="form">
            <fieldset class="fieldset">
                <label for="" class="email">E-mail:</label>
                <input type="email" name="email" placeholder="Seu Email:">
                <label for="" class="password">Senha:</label>
                <input type="password" name="senha" placeholder="Sua Senha:">
                <button type="submit" class="btnLogin">Entrar</button>
            </fieldset>
        </form>
        <a href="cadastrar.php" >
            <button class="btnCadastro" style="width: 99%; padding: 1.5%; border-radius: 7px; border: none; cursor: pointer; background-color: #FF5000; color: white; font-size: medium; font-weight: bold;">Cadastrar</button>
        </a>
    </div>
</body>

</html>