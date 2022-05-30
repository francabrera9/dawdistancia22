<?php
/**
  * @author Francisco Manuel Cabrera Cañete 
  * @version 1.0
  * {@internal información para desarrolladores}
  */


  /**
    * Función suma de dos números
    * @param int $num1 
    * @param int $num2
    * @param int $lado
    * @return float 
 */
  

  function suma ($num1, $num2) {
      $resultadosuma = $num1 + $num2;
      return $resultadosuma;

  }
  
  function areacuadrado ($lado) 
  {
  	$area = $lado * $lado;
  	return $area;
  }

$suma = suma (24,42);
echo $suma;

$areacuadrado = areacuadrado (5);
echo $areacuadrado;

?>
