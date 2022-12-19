<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data em PHP</title>
</head>
<body>
  
  <?php

    echo date('d/m/Y H:i'); //Verificar os token de tipo no site da PHP

    echo date_default_timezone_get(); // => Retorna o timezone defaul da aplicação.
    echo '<br />';

    echo date_default_timezone_set('America/Sao_Paulo'); // => Atualiza o timezone default da aplicação.
    // Timezone - verificar no site PHP.
    echo '<br />';


    // Espero sempre no parametro americano. (ano/mes/dia);
    $data_inicial = '2018-04-24';
    $data_final = '2018-05-15'; 

    $time_inicial = strtotime($data_inicial); // => Transforma datas textuais em segundos.
    $time_final = strtotime($data_final); // => Transforma datas textuais em segundos.

    $diferenca_times = $time_final - $time_inicial;

    echo '<br />';
    echo 'A diferença de segundos entre as data é ' . $diferenca_times;

    $segungos_existe_dia = 24 * 60 * 60;
    echo '<br />';
    echo 'Um dia possui ', $segungos_existe_dia . ' segundos';

    $diferenca_de_dias_entre_datas = $diferenca_times / $segungos_existe_dia;

    echo 'A diferença de dias é '. $diferenca_de_dias_entre_datas;
    

  ?>

</body>
</html>