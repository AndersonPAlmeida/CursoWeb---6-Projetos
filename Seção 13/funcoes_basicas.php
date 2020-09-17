<?php
# isset -> verifica se uma variavel foi inicializada
$valor = 'jamilton';

if (isset($valor)) {
    echo 'true -> variável iniciada <br>';
} else {
    echo 'false -> variável não iniciada <br>';
}

# empty -> retorna true sempre que uma variável estiver vazia
$valor = 'a';

if (empty($valor)) {
    echo 'true -> variável vazia <br>';
} else {
    echo 'false -> variável não vazia <br>';
}

# is_numeric -> testa se uma variável é numérica(pode ser string numérica) ou não
$valor = 0;

if (empty($valor)) {
    echo 'true -> variável numérico <br>';
} else {
    echo 'false -> variável não numérico <br>';
}
