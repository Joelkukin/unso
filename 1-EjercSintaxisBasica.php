<?php 
/*
1- Declarar 5 variables numéricas. (1,2,3,4,5)
2- Realizar la suma de todas ellas y almacenar el resultado en la variable $total
3- Realizar una secuencia donde se representen los días de la semana. Si es 1 mostrar “Lunes” si es 2 “Martes” y así hasta completar la semana.
4- Realizar un bucle donde me salude 5 veces.
5- Realizar el código necesario para que la salida por pantalla sea la siguiente “Lunes,Martes,Miércoles,Jueves,Viernes”.
6- Realizar la inversa, dado el String “Lunes,Martes,Miércoles,Jueves,Viernes” separa los días y pasarlos a un Array (Investigar)
    -Investigación: 
        $stringSeparado = explode($separador, $cadena); // fuente: https://www.php.net/manual/es/function.explode.php

7- Ordenar los números de manera descendente (Investigar Sort)
*/
echo "<h1>bienvenido a tu primer script de PHP </h1>";

// IGUALES QUE JS
    // if
    // for
    // while
    // doWhile

// ACTIVIDAD

//## CONSIGNA 1
echo "<h2>CONSIGNA 1</h2>";
echo "<br> 1. Declarar 5 variables numéricas. (1,2,3,4,5) <br><br>";

$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;
$num5 = 5; 


echo '$num1 = 1;
$num2 = 2;
$num3 = 3;
$num4 = 4;
$num5 = 5; <br><br>';

//## CONSIGNA 2
echo "<h2>CONSIGNA 2</h2>";
echo "<br> 2. Realizar la suma de todas ellas y almacenar el resultado en la variable \$total <br>";

$total = $num1+$num2+$num3+$num4+$num5;

echo '<br>'.$total.' = '.$num1.' + '.$num2.' + '.$num3.' + '.$num4.' + '.$num5.';<br><br>';

//## CONSIGNA 3
echo "<h2>CONSIGNA 3</h2>";
echo "<br> 3. Realizar una secuencia donde se representen los días de la semana. Si es 1 mostrar “Lunes” si es 2 “Martes” y así hasta completar la semana.<br><br>";
$nroDia=5;
switch ($nroDia) {
    case '1':
        echo "Respuesta = lunes <br>";
        break;
        
    case '2':
        
        $respSemana = "Respuesta = martes <br>";
        echo $respSemana;
        break;
    
    case '3':
        
        $respSemana = "Respuesta = miercoles <br>";
        echo $respSemana;
        break;
    
    case '4':
        
        $respSemana = "Respuesta = jueves <br>";
        echo $respSemana;
        break;

    case '5':
        
        $respSemana = "Respuesta = viernes <br>";
        echo $respSemana;
        break;

    case '6':
        
        $respSemana = "Respuesta = sabado <br>";
        echo $respSemana;
        break;
    
    case '7':
        
        $respSemana = "Respuesta = domingo <br>";
        echo $respSemana;
        break;

    default:    

        echo "Respuesta = valor no valido <br>";
        break;
}

//## CONSIGNA 4
echo "<h2>CONSIGNA 4</h2>";
echo "<br> 4. Realizar un bucle donde me salude 5 veces<br><br>";

for ($i=0; $i < 5; $i++) { 
    echo "saludo nro ".$i."<br>";
}

//## CONSIGNA 5
echo "<h2>CONSIGNA 5</h2>";
echo '<br> 5. Realizar el código necesario para que la salida por pantalla sea la siguiente “Lunes,Martes,Miércoles,Jueves,Viernes”.<br><br>';

for ($i=1; $i<=5; $i++){
    switch ($i) {
        case '1':
            echo "lunes";
            break;
            
        case '2':
            
            $respSemana = "martes";
            echo $respSemana;
            break;
        
        case '3':
            
            $respSemana = "miercoles";
            echo $respSemana;
            break;
        
        case '4':
            
            $respSemana = "jueves";
            echo $respSemana;
            break;
    
        case '5':
            
            $respSemana = "viernes";
            echo $respSemana;
            break;
    
        case '6':
            
            $respSemana = "sabado";
            echo $respSemana;
            break;
        
        case '7':
            
            $respSemana = "domingo";
            echo $respSemana;
            break;
    
        default:    
    
            echo "valor no valido";
            break;
    }
    if($i<5){echo ", ";}
}
echo "<br>";
//## CONSIGNA 6
echo "<h2>CONSIGNA 6</h2>";
echo '<br> 6. Realizar la inversa, dado el String “Lunes,Martes,Miércoles,Jueves,Viernes” separa los días y pasarlos a un Array (Investigar)<br><br>';

$string = "Lunes,Martes,Miércoles,Jueves,Viernes";
/* usar la funcion explode cuya sintaxis es: explode($separador, $string, $limite)*/

$array[0] = explode(',', $string); // pasar palabras del string al array, utiliza ',' para separar las palabras

//  PRUEBA print_r($array)
print_r($array);

//## CONSIGNA 7
echo "<h2>CONSIGNA 7</h2>";
echo '<br> 7. Ordenar los números de manera descendente (Investigar Sort)<br><br>';

$ordenNrosDes = array($num1,$num2,$num3,$num4,$num5);

rsort($ordenNrosDes);

print_r($ordenNrosDes);
?>