<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manipulação de Strings</title>
</head>
<body>
  <?php
  // strtolower($texto) => Transforma todos os caracteres da string em minusculos;
  // strtoupper($texto) => Transforma todos os caracteres da string em maiusculos;
  // ucfirst($texto) => Transforma o primeiro caracter da string em maiusculo;
  // strlen($texto) => Conta a quantidade de caracteres de uma string;
  // str_replace(<procura por>, <substitui por>, $texto) =>  Subistitui uma cadeia de caracteres por outra dentro de uma string;
  // substr($texto, <posicao inicial> , <qtde caracteres>) => Retorna parte de uma string;

    $texto = 'Curso completo de PHP';

    echo $texto . '<br />';
    echo strtolower($texto);

    echo '<hr />';
    echo strtoupper($texto);

    echo '<hr />';
    echo ucfirst($texto);

    echo '<hr />';
    echo strlen($texto);

    echo '<hr />';
    //                de       para        qual texto
    echo str_replace('PHP', 'JavaScript', $texto);

    echo '<hr />';
    echo substr($texto, 2, 5);
  
  ?>
</body>
</html>