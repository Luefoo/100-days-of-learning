<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Pedra-Papel-Tesoura</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #f8f9fa;
            /* Cor de fundo */
            color: #333;
            /* Cor do texto principal */
            font-family: Arial, sans-serif;
            /* Fonte principal */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* Altura 100% da viewport */
            width: 100%;
        }

        .user {
            text-align: center;
            /* Alinhamento do texto centralizado */
            min-height: 100%; /* Garante que ocupe toda a altura do pai */
            display: flex; /* Utiliza flexbox para centralizar */
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
        }

        .user h1 {
            font-size: 2.5rem;
            /* Tamanho do título */
            margin-bottom: 1.5rem;
            /* Margem inferior */
        }

        .btn-group {
            margin-top: 1.5rem;
            /* Espaçamento superior para o grupo de botões */
        }

        .btn-dark {
            background-color: #343a40;
            /* Cor de fundo dos botões */
            color: #fff;
            /* Cor do texto dos botões */
            border-color: #343a40;
            /* Cor da borda dos botões */
        }

        .btn-dark:hover {
            background-color: #212529;
            /* Cor de fundo dos botões ao passar o mouse */
            border-color: #212529;
            /* Cor da borda dos botões ao passar o mouse */
        }

        .btn-primary {
            background-color: #007bff;
            /* Cor de fundo do botão primário */
            border-color: #007bff;
            /* Cor da borda do botão primário */
        }

        .btn-primary:hover {
            background-color: #0069d9;
            /* Cor de fundo do botão primário ao passar o mouse */
            border-color: #0062cc;
            /* Cor da borda do botão primário ao passar o mouse */

        }
    </style>
</head>

<body>

    <div class="container">
    
        <div class="user d-flex justify-content-center align-items-center">
            <div class="Conteudo">
            <h1>Boa Sorte</h1>
                <h2>Pedra Papel e Tesoura</h2>
                <form action="resultado.php" method="post">
                    <div class="btn-group">
                        <button type="submit" name="choice" value="pedra" class="btn btn-white"><img src="img/Pedra.png"
                                alt="pedra" height="50pt" width="60pt"></button>
                        <button type="submit" name="choice" value="papel" class="btn btn-white"><img src="img/Papel.png"
                                alt="papel" height="50pt" width="60pt"></button>
                        <button type="submit" name="choice" value="tesoura" class="btn btn-white"><img
                                src="img/Tesoura.png" alt="tesoura" height="50pt" width="60pt"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
