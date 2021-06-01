<?php

function getBackwordPrimes ($start, $end) {
    
    $arrayOfPrimes = [];
    $arrayOfBackwordPrimes = [];

    if ( $start % 2 == 0 ) $prime = $start + 1;
    else $prime = $start;
    outer: for ($prime; $prime <= $end; $prime=$prime+2) {
        
        for ($j = 2; $j < $prime; $j++) {
            if ($prime % $j == 0 ) {
                $prime = $prime + 2;
                goto outer;
            }
        }

        $stringPrime = strval($prime);
        $stringBackwordPrime = strrev($stringPrime);
        $backwordPrime = intval($stringBackwordPrime);
        for ($y = 2; $y < $backwordPrime; $y++) {
            if ($backwordPrime % $y == 0 ) {
                $prime = $prime + 2;
                goto outer;
            }
        }
        array_push ($arrayOfPrimes, $prime);
        array_push ($arrayOfBackwordPrimes, $backwordPrime);
    }
    
    foreach ($arrayOfPrimes as $prime) print $prime.'  ';
    print '<br><br>';
    foreach ($arrayOfBackwordPrimes as $backwordPrime) print $backwordPrime.'  ';
}

getBackwordPrimes (9, 100);