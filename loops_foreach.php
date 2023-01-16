<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
  
    $itens = array('geladeira', 'fogão', 'mesa', 'cadeira');

      // Primeiro array depois um apelido para cada elemento (item)
    foreach($itens as $item) {
      echo '$item <br />';
    };

    // Mostrando cada index do elemento (=>) - é o separador
    foreach($itens as $idx => $item) {
      echo "Id: $idx - Nome da lista: $item";
    }

  ?>
</body>
</html>