#Ingresar repetidamente el código (DNI) del estudiante (tipo entero) y dos notas Nota1 y Nota2 de los 
exámenes (tipo real) la finalización del ingreso de datos es a cuando se ingresa un el código igual a 
999 (validar que las notas sean valores mayores o iguales a cero). Calcular el promedio de las notas, 
mediante un módulo denominado promedioNotas. Asignar la calificación de acuerdo a las notas de 
la tabla, hacer el algoritmo, usando un módulo denominado calificacionNotas que recibe un 
parámetro formal X de tipo real, que es la Nota promedio del estudiante y que devuelve una cadena 
de caracteres con la calificación correspondiente,
<?php

function promedioNotas($nota1,$nota2){
  return $promedio = ($nota1 + $nota2)/2;
}

function clasificacionNotas($notaPromedio){
  $clasificacion = null;
  switch ($notaPromedio) {
    case ($notaPromedio>=0 && $notaPromedio<=0.5):
      $clasificacion = "Reprobado".PHP_EOL;
      break;
    case ($notaPromedio>0.5 && $notaPromedio<=3.5):
      $clasificacion = "Insuficiente".PHP_EOL;
      break;
    case ($notaPromedio>3.5 && $notaPromedio<=5.5):
      $clasificacion = "Suficiente".PHP_EOL;
      break;
    case ($notaPromedio>5.5 && $notaPromedio<=7.5):
      $clasificacion = "Bueno".PHP_EOL;
      break;
    case ($notaPromedio>7.5 && $notaPromedio<=9.5):
      $clasificacion = "Distinguido".PHP_EOL;
      break;
    case ($notaPromedio>9.5 && $notaPromedio<=10):
      $clasificacion = "Sobresaliente".PHP_EOL;
      break;
  }
  return $clasificacion;
}

function pedirNotas(){
  do{
    $nota1 = readline("Ingrese la primer nota : ").PHP_EOL;
    $nota2 = readline("Ingrese la segunda nota: ").PHP_EOL;
  }while(!is_numeric($nota1)||!is_numeric($nota2)||$nota1<0||$nota2<0);
  $promedio =  promedioNotas($nota1,$nota2);
  echo $clasificacion = clasificacionNotas($promedio);
}

function pedirDni(&$dni){
  do{
    $dni = readline("Ingrese el DNI del estudiante : ").PHP_EOL;
  }while(!is_numeric($dni));
}

pedirDni($dni);
while($dni != 999){
  pedirNotas();
  pedirDni($dni);
}