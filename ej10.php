#Diseñar un algoritmo que permita mediante un menú de opciones  
a) Ingresar un número y mediante un módulo obtener su correspondiente valor en la sucesión de 
Fibonacci.  
b) Solicitar un número y que resuelva mediante un módulo si el parámetro es un numero 
perteneciente a la sucesión o no mediante la devolución de un valor lógico.
<?php

function valorFibonacci($n) {
  if(!is_numeric($n)||$n == 0 || $n == 1){
    echo "El valor ingresado debe ser un numero, diferente a 0 y a 1".PHP_EOL;
  }else{
    $n = (int)$n;
    $a = 0;
    $b = 1;
    $resultado = 0;
    for ($i=0; $i < $n ; $i++) { 
      $resultado = $b + $a;
      $a = $b;
      $b = $resultado;
    }
  }
  return $resultado;
}

function perteneceASucesion($n){
  if(!is_numeric($n)||$n == 0 || $n == 1){
    echo "El valor ingresado debe ser un numero, diferente a 0 y a 1".PHP_EOL;
  }else{
    $n = (int)$n;
    $a = 0;
    $b = 1;
    $resultado = 0;
    $pertenece = false;
    for ($i=0; $i <= $n ; $i++) {
      if($n == $resultado){
        $pertenece = true;
      } 
      $resultado = $b + $a;
      $a = $b;
      $b = $resultado;
    }
  }
  return $pertenece;
}

function crearOpcion(&$opcion){
  do{
    echo "1-Sucesión fibonacci".PHP_EOL;
    echo "2-Ver si es perteneciente a la sucesión fibonacci".PHP_EOL;
    echo "3-Fin.".PHP_EOL;
    $opcion = readline();
  }while($opcion < 1 && $opcion > 3);
}

do{
  crearOpcion($opcion);
  switch ($opcion) {
    case '1':
      echo $resultado = valorFibonacci($n = readline("Ingrese un número: "));
      PHP_EOL;
      break;
    case '2':
      var_dump($pertenece = perteneceASucesion($n= readline("Ingrese un número: ")));
      PHP_EOL;
      break;
  }    
}while($opcion != 3);