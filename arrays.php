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

    // Arrays Associativos
    $lista_frutas = array(
      'a' => 'Banana',
      'b' => 'Maça',
      'x' => 'Pera'
    );
    // Desta forma estamos colocando qual a poção queremos
    /**
     * [a] = Banana
     * [b] = Maça
     * [x] = Pera
     */



     //Arrays Multidimensinal

     $lista_coisas = [];
     $lista_coisas['frutas'] = array('Banana', 'Pera', 'Uva');
     /**
      * lista_coisas = [frutas => array [....]]
      */
      
      $lista_coisas['pessoas'] = ['João', 'Maria', 'Pedro'];
       /**
      * lista_coisas = [
      *   frutas => array [....],
      *   pessoas => array [....]
      * ]
      */

      // Acessando uma informção - Pera -
      echo $lista_coisas['frutas'][1];
      // Acessando uma informção - João -

      echo $lista_coisas['pessoas'][0];
  ?>
    
</body>
</html>