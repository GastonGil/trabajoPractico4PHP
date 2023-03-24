#Una fábrica necesita un programa para calcular el salario y mostrar el detalle de sus empleados, los 
mismos tienen un sueldo básico común y se adiciona un 10% por cada aumento de categoría, un 5% 
por cada año de antigüedad. A todos los empleados se les descuenta un 11% por aportes jubilatorios 
y un 4% por obra social ambos del sueldo básico, y finalmente un aumento fijo de $200 en concepto 
de salario familiar por cada hijo menor de 18 años. El programa deberá contar con un modulo 
denominado Aumento y un módulo denominado Descuentos. 
<?php


function aumentos($sueldoBasico,$huboAumento,$cantidadAnios,$cantidadHMenores){
  $AUMENTOCATEGORIA = $sueldoBasico*10/100;
  $ANIOANTIGUEDAD = $sueldoBasico*5/100;
  $AUMENTOSALARIOFAMILIAR = $cantidadHMenores * 200;
  return $totalAumentos = ($huboAumento == true) ? $AUMENTOCATEGORIA+($cantidadAnios*$ANIOANTIGUEDAD)+$AUMENTOSALARIOFAMILIAR : $cantidadAnios*$ANIOANTIGUEDAD+$AUMENTOSALARIOFAMILIAR;  
}

function descuentos($sueldoBasico){
  $APORTESJUBILATORIOS = $sueldoBasico*11/100;
  $OBRASOCIAL = $sueldoBasico*4/100;
  return $totalDescuentos = $APORTESJUBILATORIOS+$OBRASOCIAL; 
}

function calcularSalario($sueldoBasico,$huboAumento,$cantidadAnios,$cantidadHMenores){
  return $sueldoFinal = $sueldoBasico+aumentos($sueldoBasico,$huboAumento,$cantidadAnios,$cantidadHMenores)-descuentos($sueldoBasico);
}

function Crearseguir(){
  do{
    $respuesta = readline("Desea continuar? Si/no: ");
  }while(strcmp($respuesta,"si")!=0 && strcmp($respuesta,"no")!=0);
  return $seguir = (strcmp($respuesta,"si")==0) ? true : false;
}

do{
  do{
    $sueldo = readline("Ingrese el sueldo básico, mayor a 0: ");
    echo PHP_EOL;
  }while(!is_numeric($sueldo)||$sueldo<=0);
  do{
    $respuestaAumento = strtolower(readline("Hubo aumento? Si/No: "));
    echo PHP_EOL;
  }while(strcmp($respuestaAumento,"si")!=0 && strcmp($respuestaAumento,"no")!=0); 
  $huboAumento = (strcmp($respuestaAumento,"si")==0) ? true : false;
  do{
    $respuestaPoseeHijos = strtolower(readline("Posee hijos menores? Si/No: "));
    echo PHP_EOL;
  }while(strcmp($respuestaPoseeHijos,"si")!=0 && strcmp($respuestaPoseeHijos,"no")!=0);
  $cantHijos=0;
  $cantAnios=0;
  if(strcmp($respuestaPoseeHijos,"si")==0){
    do{
      $cantHijos = readline("Ingresee la cantidad de hijos menores que posee mayor a 0: ");
      echo PHP_EOL;
    }while(!is_numeric($cantHijos)||$cantHijos<=0);
  }
  do{
    $respuestaAniosAntiguedad = strtolower(readline("Posee años de antiguedad? Si/No: "));
    echo PHP_EOL;
  }while(strcmp($respuestaAniosAntiguedad,"si")!=0 && strcmp($respuestaAniosAntiguedad,"no")!=0);
  if(strcmp($respuestaAniosAntiguedad,"si")==0){
    do{
      $cantAnios = readline("Ingresee la cantidad de años de antiguedad que posee mayor a 0: ");
      echo PHP_EOL;
    }while(!is_numeric($cantAnios)||$cantAnios<=0);
  }
  echo $sueldoFinal = calcularSalario($sueldo,$huboAumento,$cantAnios,$cantHijos);
  echo PHP_EOL;
  $seguir = crearSeguir();
}while($seguir);