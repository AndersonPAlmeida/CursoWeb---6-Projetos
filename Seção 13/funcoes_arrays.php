<?php
# is_array -> verifica se uma varável é um array
# in_array -> verifica se um valor existe em um array
# array_keys -> retorna todas as chaves de um array
# sort -> ordena um array
# assort -> ordena um array mantendo índice/valor
# count conta elementos de um array
# array_merge -> funde um ou mais arrays
# explode -> divide uma string baseado em um delimitador
# implode -> junta elementos de um array em uma string

// $array = "String";
$array = array();
$retorno = is_array($array);

if ($retorno) {
    echo 'Verdadeiro';
} else {
    echo 'Falso';
}
echo '<br>';

$array = array('mac', 'linux', 'windows');
// $retorno = in_array('mac', $array);
$retorno = in_array('solaris', $array);

if ($retorno) {
    echo 'Verdadeiro';
} else {
    echo 'Falso';
}
echo '<br>';

$produtos = array(10=>'Notebook', 11=>'Teclado');
$chaves_array = array_keys($produtos);

# var_export utilizada quando quer exibir valores relacionado a arrays
var_export($chaves_array);
echo '<br>';

$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');
sort($frutas);

var_export($frutas);
echo '<br>';

$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');
asort($frutas);

var_export($frutas);
echo '<br>';

$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');
$itens_array = count($frutas);

echo $itens_array;
echo '<br>';

$array1 = array('mac', 'linux');
$array2 = array('windows');
$array3 = array('solaris');
$novo_array = array_merge($array1, $array2, $array3);

var_export($novo_array);
echo '<br>';

$string = "20/10/2020";
$retorno = explode("/", $string);

var_export($retorno);
echo '<br>';

$nova_string = implode("/", $retorno);
echo $nova_string;
echo '<br>';