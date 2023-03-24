#Crea una función MayorDeTres, que reciba tres números enteros y devuelva el valor del mayor de 
ellos. Por ejemplo, para los números 5, 7 y 5, devolvería el valor 7.
<?php

function mayorDetres($a,$b,$c){
  $mayor = ($a > $b && $a > $c) ? $a :(($b > $c) ? $b : $c);
  return $mayor;
}

function usandoMayorDeTres(){
  do{
    $a = readline("Ingrese el primer número: ");
    PHP_EOL;
    $b = readline("Ingrese el segundo número: ");
    PHP_EOL;
    $c = readline("Ingrese el tercer número: ");
    PHP_EOL;
  }while(!is_numeric($a)||!is_numeric($b)||!is_numeric($c));
  $a = (int)$a;
  $b = (int)$b;
  $c = (int)$c;
  echo mayorDetres($a,$b,$c);
}
usandoMayorDeTres();