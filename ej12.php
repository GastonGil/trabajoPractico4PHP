#Escribe una función en pseudocódigo llamada ConversionPesos (...) que permita convertir una 
cantidad de dinero dada en dólares, libras o yenes a Pesos Argentinos. Estas son las equivalencias 
aproximadas: 
1 libra= 23,11pesos 
1 dólar= 17,48 pesos 
1 yen= 0,154 pesos 
1 euro= 20,59 pesos
<?php

function crearOpcion(&$opcion){
  do{
    echo "1-Convertir dolares a pesos argentinos.".PHP_EOL;
    echo "2-Convertir libras a pesos argentinos.".PHP_EOL;
    echo "3-Convertir yeneses a pesos argentinos.".PHP_EOL;
    echo "4-Convertir euros a pesos argentinos.".PHP_EOL;
    echo "5-Fin".PHP_EOL;
    $opcion = readline();
    if($opcion == 5){
    echo "Fin del programa.".PHP_EOL;
    }
  }while($opcion < 1 || $opcion > 5);
}

function convertidorLibra($cantidadOtraMoneda){
  $LIBRA = 23.11;
  return $PESOSARGENTINOS = $cantidadOtraMoneda*$LIBRA; 
}
function convertidorDolar($cantidadOtraMoneda){
  $DOLAR = 17.48; 
  return $PESOSARGENTINOS = $cantidadOtraMoneda*$DOLAR;
}
function convertidorYen($cantidadOtraMoneda){
  $YEN= 0.154; 
  return $PESOSARGENTINOS = $cantidadOtraMoneda*$YEN;
}
function convertidorEuro($cantidadOtraMoneda){
  $EURO = 20.59; 
  return $PESOSARGENTINOS = $cantidadOtraMoneda*$EURO;
}


  crearOpcion($opcion);
  while($opcion != 5){
    do{
      $cantidadOtraMoneda = readline("Ingrese la cantidad de su moneda extranjera, mayor a 0: ");
      PHP_EOL;
    }while(!is_numeric($cantidadOtraMoneda) || $cantidadOtraMoneda <= 0);
    switch ($opcion) {
    case '1':
      echo $resultado = convertidorDolar($cantidadOtraMoneda).PHP_EOL;
      break;
    case '2':
      echo $resultado = convertidorLibra($cantidadOtraMoneda).PHP_EOL;
      break;
    case '3':
      echo $resultado = convertidorYen($cantidadOtraMoneda).PHP_EOL;
      break;
    case '4':
      echo $resultado = convertidorEuro($cantidadOtraMoneda).PHP_EOL;
      break;
    }
    crearOpcion($opcion);
  }
