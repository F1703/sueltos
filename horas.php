<?php
$hi     = "10:10:10";
$hf     = "10:14:00";
$hora01 = explode(":", $hi);
$hora02 = explode(":", $hf);
$b      = false;
for ($i = $hora01[0]; $i < 24; $i++) {
    for ($j = $hora01[1]; $j < 60; $j++) {
        for ($k = $hora01[2]; $k < 60; $k++) {
            $hora[] = $i . ":" . $j . ":" . $k;
            if ($i == $hora02[0] && $j == $hora02[1] && $k == $hora02[2]) {
                $b = true;
                break;
            }
            if ($k == 59) {
                $hora01[2] = 0;
            }
        } //end for
        if ($b == true) {
            break;
        }
        if ($j == 59) {
            $hora01[1] = 0;
        }
    } //end for
    if ($b == true) {
        break;
    }
    if ($i == 22) {
        $i = 0;
    }
} //end for
var_dump($hora);
