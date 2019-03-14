var timerId = null //variável que armazena a chamada da função timeout
// função para inicar o jogo
function iniciarJogo() {
    var url = window.location.search;
    var nivel_jogo = url.replace("?", "");
    var tempo_segundo = 0;

    if(nivel_jogo == 1){
        // 1 fácil -> 120 segundos
        tempo_segundo = 120;
    }

    if(nivel_jogo == 2){
        // 2 normal -> 60 segundos
        tempo_segundo = 60;
    }

    if(nivel_jogo == 3){
        // 3 difícil -> 30 segundos
        tempo_segundo = 30
    }

    //inserindo segundos no span
    document.getElementById('cronometro').innerHTML = tempo_segundo;

    //Inserindo balões
    var qtde_baloes = 20;

    cria_baloes(qtde_baloes);

    // imprimir qtde de balões inteiros
    document.getElementById('baloes_inteiros').innerHTML = qtde_baloes;
    // imprimir qtde de balões estourados
    document.getElementById('baloes_estourados').innerHTML = 0;

    contagem_tempo(tempo_segundo+1);
}

// função para criar os balões na tela
function cria_baloes(qtde_baloes) {
    for(var i=1; i<=qtde_baloes; i++){
        var balao = document.createElement("img");

        balao.src = "imagens/balao_azul_pequeno.png";  
        balao.style.margin = '10px';
        balao.id = 'b'+i;
        
        balao.onclick = function() {
            estourar(this);
        }

        document.getElementById('cenario').appendChild(balao);
    }    
}

// função para o cronômetro
function contagem_tempo(segundos) {
    segundos = segundos - 1;

    if(segundos == -1){
        clearTimeout(timerId);//para a execução da função do setTimeout
        game_over();

        return false;
    }

    document.getElementById('cronometro').innerHTML = segundos;
    timerId = setTimeout("contagem_tempo("+segundos+")",1000); //executa uma função a cada tempo de milisegundos
}

//função de fim de jogo
function game_over() {
    remove_eventos_baloes();
    alert('Fim de jogo! Perdeu!')
}

// função para estourar o balão
function estourar(e) {
    var id_balao = e.id;

    document.getElementById(id_balao).setAttribute("onclick", "")
    document.getElementById(id_balao).src = 'imagens/balao_azul_pequeno_estourado.png';

    pontuacao(-1);
}

function pontuacao(acao) {
    var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML;
    var baloes_estourados = document.getElementById('baloes_estourados').innerHTML;

    baloes_inteiros = parseInt(baloes_inteiros);
    baloes_estourados = parseInt(baloes_estourados);

    baloes_inteiros = baloes_inteiros + acao;
    baloes_estourados = baloes_estourados - acao;

    document.getElementById('baloes_inteiros').innerHTML = baloes_inteiros;
    document.getElementById('baloes_estourados').innerHTML = baloes_estourados;

    situacao_jogo(baloes_inteiros);
}

//função para verificar a sitaução do jogo
function situacao_jogo(baloes_inteiros) {
    if (baloes_inteiros == 0) {
        alert('Parabéns! Venceu!');

        parar_jogo();
    }
}

// função para parar o jogo
function parar_jogo() {
    clearTimeout(timerId);
}

//função para remover os eventos dos balões caso o tempo acabe antes de estourar todos os balões
function remove_eventos_baloes() {
    var i = 1; //contado para recuperar balões por id
    
    //percorre o lementos de acordo com o id e só irá sair do laço quando não houver correspondência com elemento
    while(document.getElementById('b'+i)) {
        //retira o evento onclick do elemnto
        document.getElementById('b'+i).onclick = '';
        i++; //faz a iteração da variávei i
    }
}