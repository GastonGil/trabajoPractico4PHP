#Escribir un módulo denominado PMS que tiene dos parámetros formales B y A. Calcular B (base) 
elevado a A, siendo B un número real cualquiera y A un valor entero positivo o nulo. Hacerlo 
mediante multiplicaciones sucesivas de la Base. Si el cálculo no puede realizarse debe devolver cero.
<?php

function pms($base, $potencia){
  $resultado = 0;
  if($potencia <= 0 || !is_numeric($potencia)|| $base == 0){
    return $resultado;
  }else{
    $potencia = (int)$potencia;
    for ($i=1; $i < $potencia; $i++) { 
    $resultado += $base * $base;
    }
    return $resultado;
  }
}

do{
  $base = readline("Ingrese la base, debe ser un número real: ").PHP_EOL;
  $potencia = readline("Ingrese la potencia, debe ser entero o nulo: ").PHP_EOL;
}while(!is_numeric($base));

echo $resultado = pms($base,$potencia);