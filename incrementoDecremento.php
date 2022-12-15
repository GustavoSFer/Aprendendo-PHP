<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Incremento e Decremento</title>
</head>
<body>
  <?php
  
    // ++$a => Adiciona uma unidade antes de retornar $a
    // $a++ => Retorna $a e depois adicona uma unidade
    // --$a => Diminui uma unidade antes de retornar $a
    // $a-- => Retorna $a e depois diminui uma unidade

  ?>

  <h3>Pós-decremento</h3>
  <?php
    $a = 7;

    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a após o decremento" . $a-- . " <br />";
    echo "O valor atualizado é $a <br />";
  ?>

<h3>pré-decremento</h3>
  <?php
    $a = 7;

    echo "O valor contido em a é $a <br />";
    echo "O valor contido em a após o decremento" . --$a . " <br />";
    echo "O valor atualizado é $a <br />";
  ?>
</body>
</html>