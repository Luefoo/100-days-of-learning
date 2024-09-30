<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero_jogador = isset($_POST['numero_jogador']) ? intval($_POST['numero_jogador']) : 0;
    $escolha_jogador = isset($_POST['escolha_jogador']) ? $_POST['escolha_jogador'] : '';
    
    // Gera um número aleatório de 1 a 5
    $numero_computador = rand(1, 5);

    // Calcula a soma e o resultado
    $soma = $numero_jogador + $numero_computador;
    $resultado = $soma % 2 == 0 ? 'Par' : 'Ímpar';

    // Verifica se o jogador ganhou ou perdeu
    $ganhou = ($escolha_jogador === 'par' && $resultado === 'Par') || ($escolha_jogador === 'impar' && $resultado === 'Ímpar');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
       <style>
        body {
            background-color: #f8f9fa; /* Light grey background */            /* Cor de fundo */
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
            margin-bottom: 1rem;
            /* Margem inferior */
        }

        #btn {
            background-color: #141414; /* Dark grey button background */
            color: white;
            font-size: 120%;
            border-radius: 5px;
            border: none;
            margin-top: 5%;
        }
        
        h1{
            color: red;
            font-weight: bold;
            font-style: italic;
        }
       
        </style>
        <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    </style>
</head>
<body>
<div class="container">
    <div class="results">
        <h1>Resultados</h1>
        <p>Você <?php echo $ganhou ? 'ganhou' : 'perdeu'; ?>!</p>
        <p>Número jogado pelo computador: <?php echo $numero_computador; ?></p>
        <p>Soma: <?php echo $soma; ?> => <?php echo $resultado; ?></p>
        <button id="btn" onclick="window.location.href='index.php'">Jogar Novamente</button>
    </div>
</div>
</body>
</html>
