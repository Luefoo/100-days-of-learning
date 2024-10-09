let tempoInicio = null;
let tempoReacao = null;
let jogoAtivo = false;

function iniciarJogo() {
    jogoAtivo = true;
    document.getElementById('resultado').textContent = '';
    document.getElementById('mensagem').textContent = ''; // Limpa a mensagem de erro
    document.getElementById('btn-iniciar').style.display = 'none'; // Esconde o botão de iniciar
    document.getElementById('tempo').style.display = 'block'; // Mostra o tempo
    document.getElementById('botao').style.display = 'inline-block'; // Mostra o botão que muda de cor
    mudarCor();
}

function mudarCor() {
    const tempoEspera = Math.floor(Math.random() * 3000) + 1000;
    setTimeout(() => {
        if (jogoAtivo) {
            document.getElementById('botao').style.backgroundColor = '#39ff14'; // Verde claro neon
            tempoInicio = new Date(); // Marca o início da reação
            document.getElementById('tempo').textContent = "Clique no botão!";
        }
    }, tempoEspera);
}

function clicar() {
    if (jogoAtivo && tempoInicio) {
        const tempoFim = new Date();
        tempoReacao = (tempoFim - tempoInicio) / 1000; // Tempo em segundos
        document.getElementById('resultado').textContent = `Tempo de reação: ${tempoReacao.toFixed(2)} segundos!`;
        document.getElementById('resultado').style.display = 'block'; // Mostra o resultado
        document.getElementById('botao').style.backgroundColor = 'red'; // Muda para vermelho após clicar
        jogoAtivo = false; // Desativa o jogo
        document.getElementById('btn-recomecar').style.display = 'inline-block'; // Exibe botão de recomeçar
    } else if (jogoAtivo) {
        // Se clicar antes de o botão ficar verde
        document.getElementById('mensagem').textContent = "Você está sendo rápido demais!"; // Mensagem de erro
        document.getElementById('botao').style.display = 'none'; // Esconde o botão
        document.getElementById('btn-recomecar').style.display = 'inline-block'; // Exibe botão de recomeçar
        jogoAtivo = false; // Desativa o jogo
    }
}

function recomecar() {
    // Reseta o estado do jogo
    jogoAtivo = false;
    document.getElementById('botao').style.backgroundColor = '#ff6600'; // Reseta a cor do botão
    document.getElementById('tempo').style.display = 'none'; // Esconde o tempo
    document.getElementById('resultado').style.display = 'none'; // Esconde o resultado
    document.getElementById('mensagem').textContent = ''; // Limpa a mensagem de erro
    document.getElementById('btn-recomecar').style.display = 'none'; // Esconde o botão de recomeçar
    document.getElementById('btn-iniciar').style.display = 'inline-block'; // Mostra o botão de iniciar novamente
    document.getElementById('botao').style.display = 'none'; // Esconde o botão de clicar
}

// O botão agora muda de cor e inicia o cronômetro quando clicado
document.getElementById('botao').onclick = function() {
    if (this.style.backgroundColor === 'rgb(255, 0, 0)') {
        return; // Se o botão estiver vermelho, não faz nada
    }
    clicar();
};
