<?php 




class Numero {


  public function checar($k, $arr) {

 
    foreach ($arr as $indice) {
      // echo "For <br>";
      for ($i= 0; $i < count($arr) ; $i++) { 
          $provaReal = $indice + $arr[$i]; 

        if (  $provaReal == $k) {

          if ($indice == $arr[$i]) {
          
          } else {
          echo "Realmente $indice + " . $arr[$i] . " é igual a $k <br> ";
          }
        } else {
          
        }
      }
    }

    
  }
}

$teste = new Numero;

$teste->checar(50, [10,20,30,40]);


?>

