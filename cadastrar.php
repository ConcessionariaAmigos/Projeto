<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>

<body>
    <header class="header">
        <div class="headerContainer">
            <div class="headerLogo">
                <a href="index.php"><img src="./imagens/logo.png" alt="Logo"></a>
            </div>
            <nav class="nav">
                <ul class="navUl">
                    <a href="">
                        <li class="navLi">Contato</li>
                    </a>
                    <a href="">
                        <li class="navLi">Ajuda</li>
                    </a>
                    <a href="">
                        <li class="navLi">Minhas reservas</li>
                    </a>
                    <a href="login.php">
                        <li class="navLi">Login</li>
                    </a>
                    <a href="">
                        <li class="navLi">Cadastro</li>
                    </a>
                    <a href="index.php">
                        <li class="navLi">Voltar</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <section class="test">
            <h2>Cadastro</h2>
        </section>
        <form class="form">
            <div class="form-content">
                <label for="usurname">Nome do Usuario:</label>
                <input type="text" id="Usuario">
                <label form="name">Seu Nome:</label>
                <input type="text" id="name">
                <label for="email">Seu E-mail:</label>
                <input type="email" id="email">
                <label for="endereço">Endereço:</label>
                <input type="text" id="endereço">
                <label for="senha">Senha:</label>
                <input type="password">
                <label for="fone">Telefone:</label>
                <input type="tel" id="fone"></label>
                <button type="submit">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>