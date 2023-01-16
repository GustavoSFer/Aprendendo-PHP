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

    $funcionarios = array(
      array('nome' => 'João', 'salario' => 2500),
      array('nome' => 'Maria', 'salario' => 3500),
      array('nome' => 'Pedro', 'salario' => 3500),
      array('nome' => 'Amanda', 'salario' => 500),
    );

    foreach ($funcionarios as $idx => $funcionario) {
      foreach ( $funcionario as $idx2 => $valor) {
        echo "$idx2 - $valor <br />";
      }
      echo '<hr />';
    }

    /*
    exemplo de saida:
      nome - João 
      salario - 2500
      -----------------
      nome - Maria
      salario - 3500
      -----------------
      nome - Pedro
      salario - 3500
      -----------------
      nome - Amanda
      salario - 500
    */

  ?>
</body>
</html>