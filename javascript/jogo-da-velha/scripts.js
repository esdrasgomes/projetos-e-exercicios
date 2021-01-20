var jogador, vencedor = null;
var jogadorSelecionado = document.getElementById(elementid = 'jogador-selecionado');
var vencedorSelecionado = document.getElementById(elementid = 'vencedor-selecionado');
var quadrados = document.getElementsByClassName(classNames = 'quadrado');

mudarJogador(valor = 'X');

function escolherQuadrado(id) {     // EVITANDO QUE TENHA OUTRA JOGADA DEPOIS DE TER UM VENCEDOR
    if (vencedor !== null) {
        return;
    }
    
    var quadrado = document.getElementById(id);
    if (quadrado.innerHTML !== '-') {
        return;
    }  

    quadrado.innerHTML = jogador;
    quadrado.style.color = '#000';

    if (jogador === 'X') {
        jogador = '0';
    } else {
        jogador = 'X';
    }

    mudarJogador(jogador);
    checaVencedor();
}

function mudarJogador(valor) {
    jogador = valor;
    jogadorSelecionado.innerHTML = jogador;
}

function checaVencedor() {
    var quadrado1 = document.getElementById( elementid = 1);
    var quadrado2 = document.getElementById( elementid = 2);
    var quadrado3 = document.getElementById( elementid = 3);
    var quadrado4 = document.getElementById( elementid = 4);
    var quadrado5 = document.getElementById( elementid = 5);
    var quadrado6 = document.getElementById( elementid = 6);
    var quadrado7 = document.getElementById( elementid = 7);
    var quadrado8 = document.getElementById( elementid = 8);
    var quadrado9 = document.getElementById( elementid = 9);

    if (checaSequencia(quadrado1, quadrado2, quadrado3)) {
        mudaCorQuadrado(quadrado1, quadrado2, quadrado3);
        mudarVencedor(quadrado1);
        return;
    }
    if (checaSequencia(quadrado4, quadrado5, quadrado6)) {
        mudaCorQuadrado(quadrado4, quadrado5, quadrado6);
        mudarVencedor(quadrado4);
        return;
    }
    if (checaSequencia(quadrado7, quadrado8, quadrado9)) {
        mudaCorQuadrado(quadrado7, quadrado8, quadrado9);
        mudarVencedor(quadrado7);
        return;
    }
    if (checaSequencia(quadrado1, quadrado4, quadrado7)) {
        mudaCorQuadrado(quadrado1, quadrado4, quadrado7);
        mudarVencedor(quadrado4);
        return;
    }
    if (checaSequencia(quadrado2, quadrado5, quadrado8)) {
        mudaCorQuadrado(quadrado2, quadrado5, quadrado8);
        mudarVencedor(quadrado2);
        return;
    }
    if (checaSequencia(quadrado3, quadrado6, quadrado9)) {
        mudaCorQuadrado(quadrado3, quadrado6, quadrado9);
        mudarVencedor(quadrado3);
        return;
    }
    if (checaSequencia(quadrado1, quadrado5, quadrado9)) {
        mudaCorQuadrado(quadrado1, quadrado5, quadrado9);
        mudarVencedor(quadrado1);
        return;
    }
    if (checaSequencia(quadrado3, quadrado5, quadrado7)) {
        mudaCorQuadrado(quadrado3, quadrado5, quadrado7);
        mudarVencedor(quadrado3);
    }
}

function mudarVencedor(quadrado) {
    vencedor = quadrado.innerHTML;
    vencedorSelecionado.innerHTML = vencedor;
}

function mudaCorQuadrado(quadrado1, quadrado2, quadrado3) {
    quadrado1.style.background = '#0f0';
    quadrado2.style.background = '#0f0';
    quadrado3.style.background = '#0f0';
}

function checaSequencia(quadrado1, quadrado2, quadrado3) {
    var eigual = false;

    if (quadrado1.innerHTML !== '-' && quadrado1.innerHTML === quadrado2.innerHTML && quadrado2.innerHTML === quadrado3.innerHTML) {
        eigual = true;
    }
    return eigual;
}

function reiniciar() {
    vencedor = null;
    vencedorSelecionado.innerHTML = '';

    for (var i = 1; i <= 9; i++) {
        var quadrado = document.getElementById(i);
        quadrado.style.background = '#ddd';
        quadrado.style.color = '#ddd';
        quadrado.innerHTML = '-';
    }
    mudarJogador( valor = 'X');
}