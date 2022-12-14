<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Casting type</title>
</head>
<body>
  <!-- Tipo de variaveis -->
  <!-- gettype() => Retorna o tipo da variavel -->
  $valor = 6;

  echo gettype($valor);

  <!-- Mudando o valor 6 INT para FLOAT -->
  $valor2 = (float) $valor;

  <!-- Transformando o valor para DOUBLE -->
  $valor2 = (double) $valor;

  <!-- Transformando o valor para REAL -->
  $valor2 = (real) $valor;

  <!-- Transformando o valor para INTEIRO -->
  $valor2 = (integer) $valor;
  <!-- ou -->
  $valor2 = (int) $valor; 


   <!-- Transformando o valor para STRING -->
  $valor2 = (string) $valor;

</body>
</html>