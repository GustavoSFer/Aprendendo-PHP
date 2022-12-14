<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch case</title>
</head>
<body>
  <?php
    $opcao = 2;

    switch($opcao) {
      case 1:
        echo 'Escolhido a opção 1';
        break;
      case 2:
        echo 'Escolhido a opção 2';
        break;
      default:
        echo 'Escolha não encontrada';
        break;
    }
  ?>
</body>
</html>