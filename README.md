### Crear funcion que dada una palabra, nos devuelva si es un  palindromo
```
<?php
public function palindromo($p){
$inv=strrev($p);
if($inv==$p) return $inv;
return "no palindromo";
}
```
###Dadas dos horas con formato hh:mm:ss, devolver una lista de todos los segundos intermedios Por ejemplo para “10:10:10” y “15:15:15” devolver: ["10:10:10", "10:10:11", ... "15:15:14", "15:15:15"]*

```

``` 

### Dada la cadena “Esta es una frase”, retornar la frase que resulta de invertir cada palabra, manteniendo el orden de las palabras, así: “atsE se anu esarf”.*


```
<?php
    public function frase($f){
    $a01=explode(" ",$f);
    foreach ($a01 as $key => $value) {
        $fr[]=strrev($value);
    }
    $a=implode(" ",$fr);
    return $a;
    }
```
