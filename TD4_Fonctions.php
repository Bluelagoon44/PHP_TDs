<?php

//EXO 1

// // Version 1
// function pyramide($etage){
//     for($i=1 ; $i<=$etage ; $i++){
//         echo str_repeat($i,$i);
//         echo "<br>";
//     }
// }

// Version 2
function pyramide($etage){
    for($i=1 ; $i<=$etage ; $i++){
        for($j=0 ; $j<$i ; $j++){
            echo "$i";
        }
        echo "<br>";
    }
}

//EXO 2
function absolute($number){
    return $number < 0 ? -$number : $number;
}

//EXO 3
function maxValue($array){
    $max = $array[0];
    if(count($array) > 1){
        // ---Version avec FOR
        // 
        // for($i = 1 ; $i < count($array) ; $i++){
        //     if($array[$i] > $max) {
        //         $max = $array[$i];
        //     }
        // } 

        // ---Version avec FOREACH
        foreach($array as $value){
            if($value > $max) $max = $value;
        }
    }
    return $max;
}

//EXO 4
function modulo($a, $b){
    return $b===0 ? "Impossible de diviser par 0" : $a - $b * intdiv($a, $b);
}

//EXO 5
function nbChar($string, $char){
    $counter = 0;
    for($i=0 ; $i<strlen($string) ; $i++){
        if($string[$i] === $char) $counter++;
    }
    return $counter;
}

//EXO 6
function prime($number){
    if($number<2) return false;
    for($i=2 ; $i<=$number/2 ; $i++){
        if($number%$i === 0) return false;
    }
    return true;
}

// TD5 Bonus - TTC
function calculTTC($ht, $tva){
    return $ht + ($ht*$tva)/100;
}