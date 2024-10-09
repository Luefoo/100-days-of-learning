let pontuacao = 0;
let acertos = 0;
let erros = 0;
let rodadaAtual = 0;
const maxRodadas = 10;
let numeroAtual = null;
let tempoInicio = null; // Variável para guardar o tempo de início

function iniciar() {
  document.getElementById('btn-iniciar').style.display = 'none';
  document.getElementById('btn-par').style.display = 'inline-block';
  document.getElementById('btn-impar').style.display = 'inline-block';
  iniciarJogo();
  tempoInicio = new Date(); // Guarda o horário do início do jogo
}

function iniciarJogo() {
  numeroAtual = Math.floor(Math.random() * 999) + 1;
  document.getElementById('numero-gerado').textContent = `Número: ${numeroAtual}`;
}

function jogar(escolha) {
  if (rodadaAtual < maxRodadas) {
    const parOuImpar = numeroAtual % 2 === 0 ? 'par' : 'impar';

    if (escolha === parOuImpar) {
      document.getElementById('resultado').textContent = `Você escolheu ${escolha}, o número foi ${numeroAtual} (${parOuImpar}). Você acertou!`;
      acertos++;
    } else {
      document.getElementById('resultado').textContent = `Você escolheu ${escolha}, o número foi ${numeroAtual} (${parOuImpar}). Você errou!`;
      erros++;
    }

    rodadaAtual++;
    document.getElementById('pontuacao').textContent = `Rodada: ${rodadaAtual} de ${maxRodadas}`;
    
    // Se ainda não completou as 10 rodadas, gera o próximo número
    if (rodadaAtual < maxRodadas) {
      iniciarJogo(); // Mostra o próximo número
    } else {
      finalizarJogo(); // Finaliza o jogo após a última rodada
    }
  }
}

function finalizarJogo() {
  // Oculta os botões
  document.getElementById('btn-par').style.display = 'none';
  document.getElementById('btn-impar').style.display = 'none';

  // Exibe o resultado da última rodada brevemente
  setTimeout(() => {
    const tempoFim = new Date(); // Marca o fim do jogo
    const tempoTotal = (tempoFim - tempoInicio) / 1000; // Calcula o tempo total em segundos

    // Limpa a tela de resultado e exibe a tela final
    document.getElementById('numero-gerado').textContent = '';
    document.getElementById('resultado').textContent = '';

    // Mostra o resultado final
    document.getElementById('acertos').textContent = `Total de acertos: ${acertos}`;
    document.getElementById('erros').textContent = `Total de erros: ${erros}`;
    document.getElementById('tempo-total').textContent = `Você completou o jogo em ${tempoTotal.toFixed(2)} segundos!`;

    // Exibe os botões de Recomeçar e Sair
    document.getElementById('btn-recomecar').style.display = 'inline-block';
    document.getElementById('btn-sair').style.display = 'inline-block';
  }, 1500); // Atraso de 1,5 segundos
}

function recomecar() {
  rodadaAtual = 0;
  acertos = 0;
  erros = 0;
  document.getElementById('numero-gerado').textContent = '';
  document.getElementById('resultado').textContent = '';
  document.getElementById('pontuacao').textContent = '';
  document.getElementById('acertos').textContent = '';
  document.getElementById('erros').textContent = '';
  document.getElementById('tempo-total').textContent = ''; // Limpa o tempo total

  // Esconde os botões de Recomeçar e Sair
  document.getElementById('btn-recomecar').style.display = 'none';
  document.getElementById('btn-sair').style.display = 'none';

  // Mostra o botão de iniciar
  document.getElementById('btn-iniciar').style.display = 'inline-block';
}

function sair() {
  window.location.reload();
}
