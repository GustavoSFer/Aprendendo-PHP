<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>exercicio função</title>
</head>
<body>

  <?php
  
    function calcularImpostoASerPago($salario) {
      if ($salario < 1903.98) {
        echo "Isento";
      } else if ($salario <= 2826.65) {
        $imposto = ($salario * 7.5) / 100;
        echo "Imposto $imposto";
      } else if ($salario <= 3751.05) {
        $imposto = ($salario * 15) / 100;
        echo "Imposto $imposto";
      } else if ($salario <= 4664.68) {
        $imposto = ($salario * 22.5) / 100;
        echo "Imposto $imposto";
      } else {
        $imposto = ($salario * 27.5) / 100;
        echo "Imposto $imposto";
      }
    }
  
    calcularImpostoASerPago(3224.33);
    
  ?>
  
</body>
</html>