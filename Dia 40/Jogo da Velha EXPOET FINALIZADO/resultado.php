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
            width: 100%;
        }

        .user {
            text-align: center;
            /* Alinhamento do texto centralizado */
        }

        .user h1 {
            font-size: 2.5rem;
            /* Tamanho do título */
            margin-bottom: 1.5rem;
            /* Margem inferior */
        }

        .cont {
            margin-top: 1.5rem;
            /* Espaçamento superior */
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

        .dot {
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0%, 100% {
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="container text-center align-items-center">
        <div class="user">
            <h2>Pedra Papel e Tesoura</h2>
           
                <input type="hidden" name="csrf_token" value="">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                            <img src="img/Pedra.png" alt="pedra" height="50pt" width="60pt">
                    </div>
                    <div class="col-sm-4">
                            <img src="img/Papel.png" alt="papel" height="50pt" width="60pt">

                    </div>
                    <div class="col-sm-4">
           
                            <img src="img/Tesoura.png" alt="tesoura" height="50pt" width="60pt">

                    </div>
                </div>
   
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Lê os dados do formulário
                $userChoice = $_POST['choice'];
                
                // Lógica para gerar escolha aleatória do computador (pedra, papel ou tesoura)
                $choices = ['pedra', 'papel', 'tesoura'];
                $computerChoice = $choices[array_rand($choices)];
              
                // Determina o resultado do jogo
                if ($userChoice == $computerChoice) {
                    $result = 'Empate';
                    $userWins = false;
                } elseif (
                    ($userChoice == 'pedra' && $computerChoice == 'tesoura') ||
                    ($userChoice == 'papel' && $computerChoice == 'pedra') ||
                    ($userChoice == 'tesoura' && $computerChoice == 'papel')
                ) {
                    $result = 'Você ganhou!';
                    $userWins = true;
                } else {
                    $result = 'Você perdeu!';
                    $userWins = false;
                }
              
                // Exibe o resultado do jogo
                echo "<div class='mt-4'>";
                echo "<h2>" . htmlspecialchars($result) . "</h2>";
                if ($userWins) {
                    echo '<a href="acesso.php" class="btn btn-primary mt-3">Ir para a Tela da Senha</a>';
                } else {
                    echo '<div>';
                    echo '<a href="puzzle.php" class="btn btn-primary mt-3" onclick="delayRedirect(event)">Tentar Novamente</a>';
                    echo '<p></p>';
                    echo '<div class="loading">';
                    echo '<span class="dot">.</span>';
                    echo '<span class="dot">.</span>';
                    echo '<span class="dot">.</span>';
                    echo '</div>';
                    echo '</div>';
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>
