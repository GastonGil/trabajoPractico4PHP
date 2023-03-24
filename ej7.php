#Diseñar un algoritmo que ordene tres números A, B, C en forma ascendente utilizando un 
procedimiento denominado menorMayor que tiene dos parámetros pasados por referencia que 
devuelve en el primer parámetro el valor menor y en el segundo el valor mayor de los parámetros 
respectivamente.
<?php



function menorMayor(&$n1, &$n2){
  do{
    $a = readline("Ingresa el primer número: ");
    PHP_EOL;
    $b = readline("Ingresa el segundo número: ");
    PHP_EOL;
    $c = readline("Ingresa el tercer número: ");
    PHP_EOL;
  }while(!is_numeric($a)||!is_numeric($b)||!is_numeric($c));
  $a = (int)$a;
  $b = (int)$b;
  $c = (int)$c;
  $n1 = ($a < $b && $a < $c) ? $a :( $b < $c ? $b : $c);
  $n2 = ($a > $b && $a > $c) ? $a :( $b > $c ? $b : $c); 
}

menorMayor($menor,$mayor);
echo "Mayor = $mayor, Menor = $menor";