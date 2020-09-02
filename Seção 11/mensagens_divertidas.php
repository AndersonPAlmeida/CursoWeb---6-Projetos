<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="estilo.css" />
  <title>Mensagens divertidas</title>
</head>

<body>
  <!-- Formas de acesso -->
  <?php
  # Formas de exibição

  echo 'Teste de impressão com echo <br>';
  print 'Teste de impressão com print <br>';
  echo '<br>';

  # Comentários

  // comentário de uma linha
  # comentário de uma linha no estilo shell
  /* comentário de múltiplas linhas
  Este tipo de comentário permite que várias
  linhas sejam comentadas*/

  # Variáveis

  //int
  $valor_inteiro = 1;
  echo $valor_inteiro;
  echo '<br>';
  // float
  $valor_fracioado = 10.7;
  echo $valor_fracioado;
  echo '<br>';
  // strings
  $texto = 'Curso de php';
  echo $texto;
  echo '<br>';
  // concatenação aspas '
  $texto = 'Curso de php - ' . $valor_inteiro;
  echo $texto;
  echo '<br>';
  // concatenação aspas "
  $texto = "Curso de php - $valor_fracioado";
  echo $texto;
  echo '<br>';
  // boolean
  $estado1 = true;
  $estado2 = false;
  echo $estado1;
  echo '<br>';
  echo $estado2;
  echo '<br>';
  echo '<br>';

  # Arrays básicos formas de criar
  /* $mensagens_divertidas['a'] = '1Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis saepe omnis';
  $mensagens_divertidas['b'] = '2nulla doloribus eum fugit magni dicta consequuntur maiores perspiciatis ';
  $mensagens_divertidas[3] = '3nemo minus quo porro, nesciunt, fugiat ullam ratione. Qui, nemo.';
  $mensagens_divertidas[4] = '4Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus pariatur ';
  $mensagens_divertidas[5] = '5nulla debitis? Necessitatibus, ullam! Explicabo, fugit laborum? Repellendus'; */

  $teste = 'Teste';

  $mensagens_divertidas = array(
    'a' => 2,
    'b' => true,
    3  => -7.15,
    4  => $teste,
    5  => '5nulla debitis? Necessitatibus, ullam! Explicabo, fugit laborum? Repellendus'
  );

  # formas de imprimir arrays
  var_dump($mensagens_divertidas);
  echo '<br>';
  print_r($mensagens_divertidas);
  echo '<br>';
  echo $mensagens_divertidas[3];
  echo '<br>';
  echo '<br>';

  ?>
  <!-- < ?=
    'Teste tag padrão';
  ?>
  < ?
		echo'Teste tag curta';
	?> -->
  <!-- <% echo 'Asp tag'; %> Não funciona -->

</body>

</html>