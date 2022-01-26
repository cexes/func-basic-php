<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
</head>
<body>
    
   
    <?php 

        //date(formato)- recuperar a data autal - data corrente 
        //date_default_timezone_get(timezone)- recuperar o timezone default da aplicação 
        // date_default_timezone_set(timezone)- atualizar o timezone default da aplicação
        // strotime(data) - transofrmar datas textuais em segundos


        //date(formato)
          echo date('d/m/Y\ H:i');

          echo '<br>';
      
          echo date_default_timezone_get();
          //modo programatico setar timezone brasil
          echo date_default_timezone_set('America/Sao_Paulo');
          
          echo '<br>';
          echo date('d/m/Y\ H:i');
 
           echo '<br>';
           echo '<br>';
     

       //padrao de data americano - ano mes e dia
           
        $data_inicial = "2021/02/12";
        $data_final=  '2023/02/23';
        
        //times de tamp. 01/01/1970
        //retorno em segundos
       $time_incial  = strtotime($data_inicial);
       $time_final =  strtotime($data_final);
       echo $data_inicial .' - ' .  $time_incial;
       echo '<br>';
       echo $data_final .'-' . $time_final;
       abs( $time_final -=  $time_incial);
       echo '<br>';
       echo "diferenca entre segundos " . $time_final;
       $time_final /= 24 * 60 * 60;
       echo '<br>';
       echo 'A diferença do dia é ' . $time_final;


   ?>
</body>
</html>