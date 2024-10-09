const totalItems = 2
let itemsFound = 0;

document.querySelectorAll('.item').forEach(item => {
    item.addEventListener('click', function() {
        if (!this.classList.contains('found')) {
            this.classList.add('found');
            itemsFound++;
            alert('Você encontrou um item: ' + this.querySelector('img').alt);
            this.style.visibility = 'hidden'; // Esconde o item após ser encontrado

            // Verifica se todos os itens foram encontrados
            if (itemsFound === totalItems && segundos > 0) {
                pararTemporizador();
                document.getElementById('passwordScreen').style.display = 'block';
            } 
        
            
        }
    });
});
let temporizador;
let segundos = 5;

function formatarTempo(seg) {
    const minutos = Math.floor(seg / 60);
    const secs = seg % 60;
    return `${String(minutos).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
}

function atualizarTemporizador() {
    document.getElementById('timer-container').textContent = formatarTempo(segundos);
    if (segundos > 0) {
        segundos--;
    } else {
        pararTemporizador();
        document.getElementById('resultado').style.display = 'block';
        document.querySelectorAll('.item').forEach(function(item) {
            item.style.visibility = 'hidden';})
    
    }
}

function iniciarTemporizador() {
    temporizador = setInterval(atualizarTemporizador, 1000);
}

function pararTemporizador() {
    clearInterval(temporizador);
}

function reiniciarTemporizador() {
    pararTemporizador();
    segundos = 60;
    document.getElementById('timer-container').textContent = formatarTempo(segundos);
    iniciarTemporizador();
}
window.onload = function() {
    iniciarTemporizador();
};


