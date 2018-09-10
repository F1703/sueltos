<?php
$f = "Esto es una Frase";
echo "Frase Original: " . $f . "<br>";
$a01 = explode(" ", $f); //convertir en array
foreach ($a01 as $key => $value) { //recorrer array
    $fr[] = strrev($value); //revertir palabra y añadir a un array
}
$a = implode(" ", $fr); // comvertir array en string
echo "FraseInvertida: " . $a; //
