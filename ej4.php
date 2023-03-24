#Escribir un algoritmo que utilice un módulo procedimiento denominado mM que tiene un parámetro 
formal X de tipo carácter, si el carácter que recibe es una letra en minúscula modifica el parámetro 
con carácter en mayúscula.

<?php

function mM($x){
  $x = str_replace($x,strtolower($x),$x);
  return $x;
}

function usarmM(){
  do{
    $x = readline("Ingrese un caracter: ");
    PHP_EOL;
  }while(strlen($x)>1 || is_numeric($x));
  echo mM($x);
}

usarmM();