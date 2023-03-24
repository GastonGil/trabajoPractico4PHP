#  Los empleados de una fábrica trabajan en dos turnos, Diurno y Nocturno. Se desea calcular el jornal 
diario de acuerdo a con las siguientes reglas: 
• La tarifa de las horas diurnas es de $100  
• La tarifa de las horas nocturnas es de $130,5  
• En caso de ser festivo, la tarifa se incrementa en un 10% en caso de turno diurno y en un 
15% para el nocturno. 
Escribe una función en pseudocódigo llamada jornal(...) que tome como parámetros el nº de horas, 
el turno y el tipo de día (“Festivo”, “Laborable”) y nos devuelva el sueldo a cobrar. Escribe también 
un algoritmo principal que pida el nombre del trabajador, el día de la semana, turno y nº de horas 
trabajadas, nos escriba el sueldo a cobrar usando la función anterior. 
Tenga en cuenta, que la función nos pide el tipo de día, pero en el algoritmo le pedimos al día, es 
decir, que debemos saber si el día que introduce el usuario es festivo o no.
<?php

function jornal($cantHoras,$tipoTurno,$tipoDia){
  $esFestivo = (strcmp($tipoDia,"festivo")==0)?true:false;
  $esLaborable = (strcmp($tipoDia,"laborable")==0)?true:false;
  $esDiurno = (strcmp($tipoTurno,"diurno")==0)?true:false;
  $esNocturno = (strcmp($tipoTurno,"nocturno")==0)?true:false;
  $tarifaDiurno = $cantHoras*100;
  $tarifaNocturno = $cantHoras*130.5;
  $tarifaFestivoDiurno = $tarifaDiurno + ($tarifaDiurno*10/100);
  $tarifaFestivoNocturno = $tarifaNocturno + ($tarifaNocturno*15/100);
  return $sueldoACobrar = ($esFestivo && $esDiurno) ? $tarifaFestivoDiurno : ($esFestivo && $esNocturno ? $tarifaFestivoNocturno : ($esLaborable && $esDiurno ? $tarifaDiurno : $tarifaNocturno));
}

function crearSeguir(){
  do{
    $respuesta = readline("Desea continuar? Si/no: ");
  }while(strcmp($respuesta,"si")!=0 && strcmp($respuesta,"no")!=0);
  return $seguir = (strcmp($respuesta,"si")==0) ? true : false;
}

function crearTipoDia(&$opcion){
  do{
    echo "Elija el día de la semana: ".PHP_EOL;
    echo "1-Domingo: ".PHP_EOL;
    echo "2-Lunes: ".PHP_EOL;
    echo "3-Martes: ".PHP_EOL;
    echo "4-Miercoles: ".PHP_EOL;
    echo "5-Jueves: ".PHP_EOL;
    echo "6-Viernes: ".PHP_EOL;
    echo "7-Sábado: ".PHP_EOL;
    $opcion = readline();
  }while($opcion < 1 || $opcion > 7);
}

do{
  $nombre = readline("Ingrese el nombre del trabajador: ");
  echo PHP_EOL;
  do{
    $cantHoras = readline("Ingrese la cantidad de horas trabajadas, mayor a 0: ");
    echo PHP_EOL;
  }while(!is_numeric($cantHoras) || $cantHoras <= 0);
  do{
    $tipoTurno = strtolower(readline("Ingrese el tipo de turno: Diurno/Nocturno: "));
    echo PHP_EOL;
  }while(strcmp($tipoTurno,"diurno") != 0 && strcmp($tipoTurno,"nocturno") != 0);
  crearTipoDia($tipoDia);
  switch ($tipoDia) {
    case '1':
      $tipoDia = "festivo";
      break;
    case '2':
      $tipoDia = "laborable";
      break;
    case '3':
      $tipoDia = "laborable";
      break;
    case '4':
      $tipoDia = "laborable";
      break;
    case '5':
      $tipoDia = "laborable";
      break;
    case '6':
      $tipoDia = "laborable";
      break;
    case '7':
      $tipoDia = "festivo";
      break;
  }
  echo $sueldoACobrar =  jornal($cantHoras,$tipoTurno,$tipoDia);
  echo PHP_EOL;
  $seguir = crearSeguir();
}while($seguir);