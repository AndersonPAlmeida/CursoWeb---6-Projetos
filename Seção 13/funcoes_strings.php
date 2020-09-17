<?php
# Transforma um texto para letra minúscula
$texto = "Curso Completo de PHP 10 # %";
echo strtolower($texto);
echo '<br>';

# Transforma um texto para letra maiúscula
$texto = "Curso Completo de PHP 10 # %";
echo strtoupper($texto);
echo '<br>';

# Transforma a primeira letra em maiúscula
$texto = "curso completo de php 10 # %";
echo ucfirst($texto);
echo '<br>';

# Calcula o tamanho de uma string (incluindo os espaços)
$texto = "curso completo de php 10 # %";
echo strlen($texto);
echo '<br>';

# Troca uma string por outra
$texto = "R$ 12.40";
echo str_replace(".", ",", $texto);
echo '<br>';

# Retrona parte de uma string
$texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";
$noticia = substr($texto, 0, 39);
echo $noticia . "...";
echo '<br>';
