<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesquisas dentro de Array</title>
</head>
<body>
  
  <?php

    // Temos duas formas de fazer pesquisa dentro de um array no PHP
    // 1ª -> in_array('palavra', array) => retorna Treu ou False 
    $lista_frutas = ['Banana', 'Morango', 'Maça', 'Uva'];

    $existe = in_array('Morango', $lista_frutas);
    if ($existe) {
      echo 'Sim, existe a fruta no array';
    } else {
      echo 'Não, não existe a fruta no array';
    }


  ?>

</body>
</html>