#Hacer un programa que nos permita introducir un numero por teclado y sobre él se permitan 
realizar las siguientes operaciones: Mostrar la cantidad de divisores, hallar su factorial, comprobar si 
es primo e imprimir su tabla de multiplicar.
<?php

function crearOpcion(&$opcion){
  do{
    echo "Opción 1: Mostrar cantidad de divisores".PHP_EOL;
    echo "Opción 2: Mostrar su factorial".PHP_EOL;
    echo "Opción 3: Mostrar si es primo".PHP_EOL;
    echo "Opción 4: Mostrar su tabla de multiplicar".PHP_EOL;
    echo "Opción 5: Fin".PHP_EOL;
    $opcion = readline();
  }while($opcion < 1 || $opcion > 5);
}

function cantidadDivisores($n){
  $cantidad = 0;
  for ($i=1; $i <= $n ; $i++) { 
    if($n%$i==0){
      $cantidad++;
    }
  }
  echo "La cantidad de divisores es: $cantidad".PHP_EOL;
}

function factorial($n){
  $factorial = 1;
  for ($i=1; $i <= $n ; $i++) { 
    $factorial *= $i;
  }
  echo "El factorial es: $factorial".PHP_EOL;
}

function primo($n){
  if($n == 0 || $n == 1){
    echo "El 0 y 1 no son primos".PHP_EOL;
  }else if($n == 2){
    echo "Es primo".PHP_EOL;
  }else{
    $contador = 0;
    for($i = 2 ; $i < $n; $i++){
      if($n%$i==0){
        echo "No es primo".PHP_EOL;
        $contador++;
        break;
      }
    }
    if($contador==0){
      echo "Es primo".PHP_EOL;
    }
  } 
}

function tablaMultiplicar($n){
  for ($i=0; $i <= 10; $i++) { 
    echo "$n * $i = ".$n*$i .PHP_EOL;
  }  
}

function menu(){
  do{
    do{
      $n = readline("Ingrese un número: ");
    }while(!is_numeric($n));
    $n = (int)$n;
    crearOpcion($opcion);
    switch ($opcion) {
      case '5':
        break;
      case '1':
        cantidadDivisores($n);
        break;
      case '2':
        factorial($n);
        break;
      case '3':
        primo($n);
        break;
      case '4':
        tablaMultiplicar($n);
        break;      
    }
  }while($opcion != 5);
}

menu();