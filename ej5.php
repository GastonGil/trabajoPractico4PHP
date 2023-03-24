#Hacer un módulo denominado Fact que tiene un parámetro X de tipo entero, en el cuál recibe un 
valor entero positivo y devuelve P que es la productoria de X. 

<?php

function fact($x){
  $p = 1;
  for ($i=1; $i <= $x ; $i++) { 
    $p *= $i;
  }
  return $p;
}

function unsandoFact(){
  do{
    $x = readline("Ingrese un entero positivo: ");
    PHP_EOL;
  }while(!is_numeric($x) || $x < 1);
  echo fact($x);
}

unsandoFact();