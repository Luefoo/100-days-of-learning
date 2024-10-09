<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link para o arquivo CSS personalizado -->
<link rel="stylesheet" href="css/style.css">
    <title>Desarme a bomba</title>
</head>
<body>
    <div class="container">
        <!-- Div principal do usuário -->
        <div class="user">
            <h1>Computador Inacessado...</h1>
            <div class="cont">
                <!-- Link que dispara a função de atraso no redirecionamento -->
                <a href="senha.php" onclick="delayRedirect(event)">Acessar</a>
                <p></p>
                <!-- Indicador de carregamento com três pontinhos -->
                <div class="loading">
                    <span class="dot">.</span>
                    <span class="dot">.</span>
                    <span class="dot">.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Link para o arquivo JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>

