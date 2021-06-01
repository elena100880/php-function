<?php declare(strict_types=1);

include "src/backward_primes.php";
use PHPUnit\Framework\TestCase;


final class backward_primesTest extends TestCase
{
    public function testEmptyOneNumberNotPrime() 
    {
        $result = getBackwardPrimes(14, 14);
        $r = $this->assertEmpty($result);
    }
    public function testOneNumberIsPrime()
    {
        $result = getBackwardPrimes(13, 13);
        $r = $this->assertEquals([13], $result);
    }
    public function testFirstNumberIsBigger()
    {
        $result = getBackwardPrimes(20, 1);
        $r = $this->assertEquals([], $result);
    }


}
