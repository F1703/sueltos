### Crear funcion que dada una palabra, nos devuelva si es un  palindromo
```
<?php
public function palindromo($p){
$inv=strrev($p);
if($inv==$p) return $inv;
        return "no palindromo";
}
```
### Dadas dos horas con formato hh:mm:ss, devolver una lista de todos los segundos intermedios Por ejemplo para “10:10:10” y “15:15:15” devolver: ["10:10:10", "10:10:11", ... "15:15:14", "15:15:15"]*

```
<?php 
public function horas($hi,$hf){
        $hora01= explode(":", $hi);
        $hora02= explode(":", $hf);
        $b=false;
        for ($i = $hora01[0]; $i < 24; $i++) {
            for ($j = $hora01[1]; $j < 60; $j++) {
                for ($k = $hora01[2]; $k < 60; $k++) {
                    $hora[] = $i . ":" . $j . ":" . $k;
                    if ($i == $hora02[0] && $j == $hora02[1] && $k == $hora02[2]) {
                        $b=true;
                        break;
                    }
                    if ($k == 59) {
                        $hora01[2] = 0;
                    }
                }//end for
                if ($b== true) {
                    break;
                }
                if ($j == 59) {
                    $hora01[1] = 0;
                }
            }//end for
            if ($b== true) {
                break;
            }
            if ($i == 22) {
                $i = 0;
            }
        }//end for
       return $hora;
}
``` 

### Dada la cadena “Esta es una frase”, retornar la frase que resulta de invertir cada palabra, manteniendo el orden de las palabras, así: “atsE se anu esarf”.*


```
<?php
    public function frase($f){
        $a01=explode(" ",$f); //convertir en array
        foreach ($a01 as $key => $value) { //recorrer array 
                $fr[]=strrev($value); //revertir palabra y añadir a un array
        }
        $a=implode(" ",$fr); // comvertir array en string
        return $a; //
    }
```
