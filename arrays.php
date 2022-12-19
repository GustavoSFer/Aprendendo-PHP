<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays em PHP</title>
</head>
<body>

  <?php

    $lista_frutas = array('Banana', 'Maça', 'Morango');
    // ou
    $lista_frutas2 = ['Banana', 'Maça', 'Morango', 'Abacate'];

    // Adicionando nova fruta
    $lista_frutas[] = 'Abacate';

    print_r($lista_frutas);
    var_dump($lista_frutas2);
    // Duas formas de debubar imprimindo na tela.

  ?>
    
</body>
</html>