#Escriba un programa con una función que tome como parámetro dos enteros, los sume y devuelva 
como resultado la suma. El programa deberá pedir al usuario los dos números, luego llamar a la 
función con los números leídos como argumentos y por último informar al usuario el valor de la 
suma.

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
  }while(!(is_numeric($numero1)||is_numeric($numero2)));
  $a = (int)$numero1;
  $b = (int)$numero2;
  $resultado = suma($a,$b);
  echo "El resultado es: $resultado";
}

usarSuma();
