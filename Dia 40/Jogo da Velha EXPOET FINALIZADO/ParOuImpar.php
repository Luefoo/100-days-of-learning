<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar html e css</title>
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
</head>
<body>
<div class="container">
    <main>
        <h1>Par ou Impar</h1>
        <form id="gameForm" action="ResultadoImparOuPar.php" method="POST" onsubmit="return validateForm()">
            <p>Escolha um numero de 1 a 5</p>
            <input type="number" id="numero_jogador" name="numero_jogador" style="font-size: 13px;" required>
            <select name="escolha_jogador" style="margin-top: 1.5rem; font-size: 17px" required>
                <option value="par">Par</option>
                <option value="impar">Ímpar</option>
            </select>
            <button type="submit" id="btn">Jogar</button>
        </form>
    </main>
</div>

<script>
    function validateForm() {
        const numeroJogador = document.getElementById('numero_jogador').value;
        if (numeroJogador < 1 || numeroJogador > 5 || isNaN(numeroJogador)) {
            alert('Escolha um número de 1 a 5');
            return false; // Impede o envio do formulário
        }
        return true; // Permite o envio do formulário
    }
</script>
</body>
</html>
