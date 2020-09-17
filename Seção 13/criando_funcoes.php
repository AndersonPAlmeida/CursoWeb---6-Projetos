<?php
# Não pode usar caracteres especiais com exceção do _
# Não pode começar com números
function primeira_funcao()
{
    echo "Curso de PHP <br>";
}

primeira_funcao();

// Função sem retorno 
function exibir_boas_vindas($nome = 'indefinido')
{
    echo "curso php, " . $nome . " <br>";
}

// Função com retorno
function calcuar_soma($numero1, $numero2)
{
    return $numero1 + $numero2;
}

// Chamar função
exibir_boas_vindas();
exibir_boas_vindas('Paulo');
echo calcuar_soma(1, 2);
