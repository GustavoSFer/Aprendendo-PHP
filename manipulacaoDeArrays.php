<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manipulação de Arrays</title>
</head>
<body>
  
  <?php

  /*
    is_array(array) -> Verifica se o paramentro é um array; => Retorno True / False
    array_keys(array) -> Retorna todas as chaves de um array;
    sort(array) -> Ordena um array e reajusta seus indices;
    asort(array) -> Ordena um array preservando os indices;
    count(array) -> Conta a quantidade de elementos de um array;
    array_merge(array) -> Funde um ou mais arrays;
    explode(array) -> Divide uma string baseada em um delimitador;
    implode(array) -> Junta elementos de um array em uma string;
  */

  $array = 'String';
  $retorno = is_array($array); // False
  $isArray = [1,2,3,4];
  $retorno = is_array($isArray); // True

  $novo_array = array('teclado', 'mouse', 'tela', 'cabo hdmi', 'gabinete');
  sort($novo_array); // Retorna True se for ordenado ou False se não foi ordenado
  print_r($novo_array);

  $novo_array = array('teclado', 'mouse', 'tela', 'cabo hdmi', 'gabinete');
  asort($novo_array); // Mantem o indice de cada elemento do array original
  print_r($novo_array);


  $array1 = ['osx', 'Windows'];
  $array2 = array('linux', 'mcos');

  $novo_array = array_merge($array1, $array2);
  echo '<pre>';
    print_r($novo_array);
  echo '</pre>';


  $string = '26/04/2020';
  $array_retorno = explode('/', $string); // Retorna um array separado pelo / ( exemplo [26, 04, 2020]);


  $array = ['a', 'b', 'c'];
  $string_retorno = implode(',', $array); // Retona uma string separando as informações com a virgula ,


  ?>

</body>
</html>