<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=3.0">
  <title>Document</title>
</head>
<body>
  <!-- Percorrendo um array bidimensional com while -->
  <?php
    $registro = array(
      array('titulo' => 'titulo natícia 1', 'conteudo' => 'Conteúdo noticia 1'),
      array('titulo' => 'titulo natícia 2', 'conteudo' => 'Conteúdo noticia 2'),
      array('titulo' => 'titulo natícia 3', 'conteudo' => 'Conteúdo noticia 3'),
    );

    echo '<pre>';
    print_r($registro);
    echo '</pre>';

    $idx = 0;
    while ($idx < count($registro)) {
      echo '<h3>' . $registro[$idx]['titulo'] . '</h3>';
      echo '<p>' . $registro[$idx]['conteudo'] . '</p>';

      echo '<hr />';
      $idx++;
    }
  ?>
</body>
</html>