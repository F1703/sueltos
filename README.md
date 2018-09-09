# Crear funcion que dada una palabra, nos devuelva si es un  palindromo
```<?php
public function palindromo($p){
$inv=strrev($p);
if($inv==$p) return $inv;
return "no palindromo";
}
```
