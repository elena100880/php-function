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

function getBackwardPrimes ($start, $end) 
{

    $arrayOfBackwardPrimes = [];

    if ($end < $start) throw new RangeException ("second number is bigger!<br>");

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
            
}

function printBackwardPrimes ($start, $end)
{
    try 
    {
        $result = getBackwardPrimes ($start, $end);

        if (isset($result) and is_array($result) ) print implode (', ', getBackwardPrimes ($start, $end) );

        else print '<br><br> NO BACKWORD PRIMES';
    }
    catch (Exception $e)
    {
        echo 'SECOND NUMBER MUST BE SMALLER!!<br><br>';
        echo 'Developer information: <br>'.$e;
    }
}

//printBackwardPrimes (13, 1);
//print RangeException::class;