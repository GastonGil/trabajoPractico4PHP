#Básicamente el mismo ejercicio anterior, pero esta vez, debe hacerlo utilizando un procedimiento el 
cual toma un tercer argumento y coloca el resultado de la suma en dicho parámetro.
<?php

function suma($numero1, $numero2){
  return $numero1 + $numero2;
}

function usarSuma(){
  do{
    $numero1 = readline("Ingrese el primer número: ");
    PHP_EOL;
    $numero2 = readline("Ingrese el segundo número: ");
    PHP_EOL;
    $numero3 = readline("Ingrese el tercer número: ");
    PHP_EOL;
  }while(!is_numeric($numero1)||!is_numeric($numero2)||!is_numeric($numero3));
  $a = (int)$numero1;
  $b = (int)$numero2;
  $c = (int)$numero3;
  $resultado = suma(suma($a,$b),$c);
  echo "El resultado es: $resultado";
}

usarSuma();