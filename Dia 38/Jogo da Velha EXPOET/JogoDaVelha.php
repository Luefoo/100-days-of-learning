<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo da Velha</title>
    <style>
        * {
          padding: 0;
          margin: 0;
          box-sizing: border-box;
        }
        
        :root {
          --blue: #0099ff;
          --winning-blocks: #008000;
        }
        
        body {
          color: var(--blue);
          font-family: Arial, Helvetica, sans-serif;
        }
        
        h1 {
          font-size: 2.5rem;
          text-transform: uppercase;
          color: #8B0000;
        }
        
        .container {
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
          background-color:#1C1C1C;
        }
        
        #gameboard {
          width: min(95%, 300px);
          max-width: 100%;
          display: grid;
          grid-template-columns: repeat(3, 1fr);
          margin-top: 40px;
        }
        
        #scoreboard {
          margin-top: 40px;
          display: flex;
          width: 50%;
          justify-content: space-between;
          font-size: 1.2rem;
          color: #fff;
          width: min(95%, 200px);
          max-width: 100%;
        }
        
        .box {
          height: 100px;
          width: 100px;
          display: flex;
          align-items: center;
          justify-content: center;
          color: #fff;
          font-size: 120px;
          border-right: 2px solid;
          border-bottom: 2px solid;
        }
        
        .box:nth-child(3n) {
          border-right: none;
        }
        
        .box:nth-child(6) ~ .box {
          border-bottom: none;
        }
        
        button {
          padding: 10px 20px;
          border-radius: 10px;
          background-color: var(--blue);
          color: #fff;
          border-color: var(--blue);
          font-size: 1.2rem;
          transition: 200ms transform;
          font-weight: 600;
          margin-top: 20px;
        }
        
        button:hover {
          cursor: pointer;
          transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 id="playerText">Jogo da Velha</h1>
        <div id="gameboard">
            <div class="box" id="0"></div>
            <div class="box" id="1"></div>
            <div class="box" id="2"></div>
            <div class="box" id="3"></div>
            <div class="box" id="4"></div>
            <div class="box" id="5"></div>
            <div class="box" id="6"></div>
            <div class="box" id="7"></div>
            <div class="box" id="8"></div>
        </div>
    </div>

    <script>
        const playerText = document.getElementById("playerText");
        const boxes = Array.from(document.getElementsByClassName("box"));
        const O_TEXT = "O";
        const X_TEXT = "X";
        let currentPlayer = X_TEXT;
        let spaces = Array(9).fill(null);
        let isMachinePlaying = false;

        const winningCombos = [
            [0, 1, 2],
            [3, 4, 5],
            [6, 7, 8],
            [0, 3, 6],
            [1, 4, 7],
            [2, 5, 8],
            [0, 4, 8],
            [2, 4, 6],
        ];

        const startGame = () => {
            boxes.forEach((box) => box.addEventListener("click", boxClicked));
        };

        function boxClicked(e) {
            const id = e.target.id;

            if (!spaces[id] && !playerHasWon() && !isDraw() && !isMachinePlaying) {
                spaces[id] = currentPlayer;
                e.target.innerText = currentPlayer;

                if (playerHasWon()) {
                    playerText.innerText = `${currentPlayer} Ganhou!`;
                    const winningBlocks = playerHasWon();
                    winningBlocks.forEach((box) => boxes[box].style.backgroundColor = '#008000');
                    setTimeout(() => {
                        window.location.href = "acesso.php"; // Redireciona após 1 segundo
                    }, 1000);
                } else if (isDraw()) {
                    playerText.innerText = "Empate!";
                    setTimeout(restartGame, 1000); // Reinicia após 1 segundo
                } else {
                    currentPlayer = currentPlayer === X_TEXT ? O_TEXT : X_TEXT;
                    if (currentPlayer === O_TEXT) {
                        isMachinePlaying = true; // A máquina vai jogar
                        setTimeout(computerPlay, 1000);  // Jogada da máquina com atraso
                    }
                }
            }
        }

        function computerPlay() {
            const availableSpaces = getRemainingSpaces();
            let computerChoice;

            // Verifica se a máquina pode vencer
            for (const combo of winningCombos) {
                const [a, b, c] = combo;
                if (spaces[a] === O_TEXT && spaces[b] === O_TEXT && spaces[c] === null) {
                    computerChoice = c;
                } else if (spaces[a] === O_TEXT && spaces[c] === O_TEXT && spaces[b] === null) {
                    computerChoice = b;
                } else if (spaces[b] === O_TEXT && spaces[c] === O_TEXT && spaces[a] === null) {
                    computerChoice = a;
                }
            }

            // Verifica se o jogador pode vencer na próxima jogada e bloqueia
            if (computerChoice === undefined) {
                for (const combo of winningCombos) {
                    const [a, b, c] = combo;
                    if (spaces[a] === X_TEXT && spaces[b] === X_TEXT && spaces[c] === null) {
                        computerChoice = c;
                    } else if (spaces[a] === X_TEXT && spaces[c] === X_TEXT && spaces[b] === null) {
                        computerChoice = b;
                    } else if (spaces[b] === X_TEXT && spaces[c] === X_TEXT && spaces[a] === null) {
                        computerChoice = a;
                    }
                }
            }

            // Se não encontrou um movimento para vencer ou bloquear, joga no primeiro espaço livre
            if (computerChoice === undefined) {
                computerChoice = availableSpaces[0]; // Joga na primeira posição livre
            }

            spaces[computerChoice] = O_TEXT;
            boxes[computerChoice].innerText = O_TEXT;

            if (playerHasWon()) {
                playerText.innerText = "Máquina Venceu!";
                const winningBlocks = playerHasWon();
                winningBlocks.forEach((box) => boxes[box].style.backgroundColor = '#008000');
                setTimeout(restartGame, 1000); // Reinicia após 1 segundo
            } else if (isDraw()) {
                playerText.innerText = "Empate!";
                setTimeout(restartGame, 1000); // Reinicia após 1 segundo
            }

            currentPlayer = X_TEXT; // Volta para o jogador X após a jogada da máquina
            isMachinePlaying = false; // A máquina terminou de jogar
        }

        function playerHasWon() {
            for (const combo of winningCombos) {
                const [a, b, c] = combo;
                if (spaces[a] && spaces[a] === spaces[b] && spaces[a] === spaces[c]) {
                    return combo;
                }
            }
            return false;
        }

        function isDraw() {
            return spaces.every((space) => space !== null);
        }

        function getRemainingSpaces() {
            return spaces.map((space, index) => space === null ? index : null).filter(val => val !== null);
        }

        function restartGame() {
            spaces.fill(null);
            boxes.forEach(box => {
                box.innerText = "";
                box.style.backgroundColor = "";
            });
            playerText.innerText = "Jogo da Velha";
            currentPlayer = X_TEXT; // Reinicia o jogador para X
            isMachinePlaying = false; // Reinicia a máquina
            startGame(); // Reinicia o jogo
        }

        startGame();
    </script>
</body>
</html>
