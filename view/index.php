<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Compra Certa</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <figure>
                    <img src="./imgs/logo.png" alt="">
                </figure>
            </nav>
        </header>
        
        <main>
            <div id="welcome-message">
                <h1>Faça compras no seu mercado favorito com a comidade de casa</h1>
            </div>
            <div id="action-buttons">
                <button id="signup">
                    <a href="./pages/cliente/cadastro.php">Cadastre-se e comece a comprar</a>
                </button>
    
                <button id="signin">
                    <a href="./pages/cliente/login.php">Já possui cadastro? <b>Faça login</b></a>
                </button>
            </div>
        </main>

        <footer>
            <button id="home">
                <a href="./pages/home.php">Acesse aqui nossos produtos</a>
            </button>
        </footer>
    </body>
</html>