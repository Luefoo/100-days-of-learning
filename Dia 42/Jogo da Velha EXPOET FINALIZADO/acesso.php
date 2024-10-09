<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link para o arquivo CSS personalizado -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light grey background */
        }
        .form-label {
            color: white; /* Dark grey text */
        }
        .form-control {
            border-color: #cccccc; /* Light grey border */
        }
        .btn {
            background-color: #333333; /* Dark grey button background */
            border: none;
        }
        .btn:hover {
            background-color: #555555; /* Slightly lighter grey on hover */
        }
        .text-danger {
            color: #555555; /* Dark grey for the forgot password link */
        }
        .text-danger:hover {
            color: #333333; /* Darker grey on hover */
        }
        .loading .dot {
            color: #333333; /* Dark grey for loading dots */
        }
        .forgot{
            color: red;
            text-decoration: none;
        }
        .forgot:hover{
            text-decoration: underline;
        }
        .forgot:active{
            color:rgba(255, 255, 255, 0);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-10">
        <div class="user text-center">
        <form action="acesso.php" method="post">
                <div class="mb-4">
                    <label for="password" class="form-label"><h2 class="text-2xl font-bold text-center">Digite a Senha:</h2></label>
                    <input type="password" id="password" name="password" class="form-control mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500">
                </div>
                <div>
                    <button type="submit" class="btn text-white font-bold py-2 px-4 rounded-md">Entrar</button>
                </div>
            </form>
            <a href="puzzle.php" class="forgot mt-3 d-block" onclick=" delayRedirect(event)">Esqueceu a senha?</a>
            
         
            <p >senha: 123</p>
        
            
            <!-- Indicador de carregamento com três pontinhos -->
            <div class="loading mt-4" style="display: none;">
                <span class="dot">.</span>
                <span class="dot">.</span>
                <span class="dot">.</span>
            </div>
        </div>
    </div>
    <!-- Link para o arquivo JavaScript -->
    <script src="js/script.js"></script>
    <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Lê os dados do formulário
                $password = $_POST['password'];
    
            if ($password == '123') {
                header("location: jogosenha.php");
            } else {
             }
            }else{

            }
    ?>
</body>
</html>
