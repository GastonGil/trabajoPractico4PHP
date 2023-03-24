#Realizar un algoritmo que incluya los siguientes módulos: 
a. Módulo Menú que tiene un parámetro entero pasado por referencia que devuelve una opción. 
b. Módulo Bienvenida sin parámetros que muestra un mensaje de bienvenida. 
c. Módulo resto que acepta dos parámetros enteros y devuelve un número entero que es el resto de 
la división entera del primer parámetro sobre el segundo parámetro. No debe utilizar el operador 
MOD. 
d. Módulo EsPar que devuelva el valor lógico "verdadero" o "falso" según si el número que se 
indique como parámetro es par o no lo es 
e. Módulo NumeroACadena que acepta un parámetro entero número entre 0 y 10, y devuelve una 
cadena de caracteres que representa el número en letras. 
f. Módulo Intercambio que acepta dos parámetros pasados por referencia que intercambian los 
valores de los parámetros. 
g. Pide al usuario dos números y muestra la "distancia" entre ellos (el valor absoluto de su diferencia, 
de modo que el resultado sea siempre positivo)
<?php

function bienvenida(){
  echo "Bienvenido/a al programa del tonga".PHP_EOL;
}

function resto($n1,$n2){
  if(!is_numeric($n1)||!is_numeric($n2)){
    echo "Los datos ingresados deben ser números.".PHP_EOL;
  }else{
    $cociente = (int)($n1/$n2);
    return $resto = $n1-($cociente*$n2);
  }
}

function esPar($n){
  if(!is_numeric($n)){
    echo "Debe ingresar un número.".PHP_EOL;
  }else{
    $n = (int)$n;
    return $parImpar = ($n%2==0)?true:false;
  }
}

function numeroACadena($n){
  if(!is_numeric($n)){
    echo "Debe ingresar un número.".PHP_EOL;
  }else{
    $n = (int)$n;
    switch ($n) {
      case 0:
        $cadena = "cero";
        break;
      case 1:
        $cadena = "uno";
        break;
      case 2:
        $cadena = "dos";
        break;
      case 3:
        $cadena = "tres";
        break;
      case 4:
        $cadena = "cuatro";
        break;
      case 5:
        $cadena = "cinco";
        break;
      case 6:
        $cadena = "seis";
        break;
      case 7:
        $cadena = "siete";
        break;
      case 8:
        $cadena = "ocho";
        break;
      case 9:
        $cadena = "nueve";
        break;
      case 10:
        $cadena = "diez";
        break;              
    } 
    return $cadena;
  }  
}

function intercambio(&$v1,&$v2){
  $aux=$v1;
  $v1 = $v2;
  $v2=$aux;
}
function distanciaEntreN(){
  do{
    $n1 = readline("Ingrese el primer número: ");
    $n2 = readline("Ingrese el segundo número: ");
  }while(!is_numeric($n1)||!is_numeric($n2));
  $n1=(int)$n1;
  $n2=(int)$n2;
  $menor = ($n1<$n2)?$n1:$n2;
  $mayor = ($menor == $n1)?$n2:$n1;
  $distancia = 0;
  for ($i=$menor+1; $i < $mayor; $i++) { 
    $distancia++;
  }
  return $distancia;
}

function menu(&$opcion){
  do{
    echo "Opción 1 : Bienvenida.".PHP_EOL;
    echo "Opción 2 : Ver resto de división.".PHP_EOL;
    echo "Opción 3 : Ver si un número es par.".PHP_EOL;
    echo "Opción 4 : Devolver del 0 al 10 en letras".PHP_EOL;
    echo "Opción 5 : Intercambio de valores de dos variables.".PHP_EOL;
    echo "Opción 6 : Ver distancia entre dos números.".PHP_EOL;
    echo "Opción 7 : Fin".PHP_EOL;
    $opcion = readline();
    if($opcion == 7){
      echo "Fin del programa.";
    }
  }while($opcion < 1 || $opcion > 7);
}

do{
  menu($opcion);
  switch ($opcion) {
    case '1':
      bienvenida();
      break;
    case '2':
      echo $resto = resto($v1=readline("ingrese el primer número:  "),$v2=readline("Ingrese el segundo número: ")).PHP_EOL;
      break;
    case '3':
      var_dump($trueOFalse = esPar($n=readline("Ingrese un número: ")));
      PHP_EOL;
      break;
    case '4':
      echo $cadena=numeroACadena($n = readline("Ingrese un número: ")).PHP_EOL;
      break;    
    case '5':
      $v1 = readline("Ingrese el primer valor: ").PHP_EOL;
      $v2 = readline("Ingrese el segundo valor: ").PHP_EOL;
      intercambio($v1,$v2);
      echo "Mostrando el intercambio: $v1, $v2".PHP_EOL;
      break;    
    case '6':
      echo $distancia = distanciaEntreN().PHP_EOL;
      break;     
  }
}while($opcion!= 7);
