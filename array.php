<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <? 

      //array sequencial
      $lista_fruta = array('Banana','maca','Abacate','mamao');
      $lista_fruta []= 'Abacaxi';
      echo '<pre>';
      var_dump($lista_fruta);
      echo '<pre/>';
      echo '<br>';
      print_r($lista_fruta);
      echo '<br>';
      echo $lista_fruta[2];
      
       echo '<br>';
       //Associativos 

       $listad  = array('a' =>'Banana', 'b' =>'maca');
       var_dump($listad);
      

  ?>


</body>
</html>