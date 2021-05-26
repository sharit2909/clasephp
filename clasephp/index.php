<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola mundo!</title>
</head>
<body>
    <?php 
      echo " <h1> Hola mundo </h1>"; 
      $nombre ="Sharit Ulloa";
      $edad = 15 ;
      echo '<h3>'.$nombre.' edad: '.$edad.' años </h3>';
      $edad +=10;
      echo '<h3>' .$edad.' </h3>';

      if ($edad > 17 ){
          echo '<h3> es mayor de edad</h3>';
      } else{
          echo '<h3> es menor de edad</h3>';
      }

      for ($i = 1; $i <= 5; $i++){
        echo '<h5>iteracion No'.$i.'</h5>';
    }
    function sayhi (){
        echo '<h2> hola </h2>'; 
    }
    function suma(){
        $num1= 5;
        $num2= 10;
        return $num1+$num2 ;
    }
    sayhi();
    suma () ."\n";

    $array= array(
        0=> "jeimy",
        1=> "kimberly",
        2=> "kenny"
    ); 

    for ($j=0; $j<3; $j++ ){
        echo $array [$j] ."\n"; 
    }
    ?>
</body>
</html>