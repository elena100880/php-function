<?php


function isPrime ($number) {
    if ($number%2 == 0) return 0;
    else {
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i == 0 ) return 0;
        }
        return 1;
    }
}

function getBackwardPrimes ($start, $end) {

    $arrayOfBackwardPrimes = [];

    try 
    {
        if ($end>$start) 
        {
            throw new Exception ("Second number is bigger")
        }
        else
        {
            if ( $start % 2 == 0 ) $number = $start + 1;
            else $number = $start;
            for ($number; $number <= $end; $number = $number + 2) {

                $backwardNumber = intval(strrev(strval($number)));
                if (isPrime($number) and isPrime($backwardNumber)) array_push ($arrayOfBackwardPrimes, $number);
            
            }
            return $arrayOfBackwardPrimes;
        }
    catch 
    {

    }
}

print implode (', ', getBackwardPrimes (1, 13) );
