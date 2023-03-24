#Hacer un algoritmo que llame a la función F (X, Y) =5.6*X+Y/2.5 y que muestre los resultados para F 
(3,5); F (9,2) y F (56,87)
<?php

function f ($x, $y){
  $resultado = 5.6*$x+$y/2.5;
  return $resultado;
}

function mostrarResultados(){
  echo f(3,5).PHP_EOL;
  echo f(9,2).PHP_EOL;
  echo f(56,87).PHP_EOL;
}

mostrarResultados();