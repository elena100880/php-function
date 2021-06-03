<?php declare(strict_types=1);

include "src/backward_primes.php";
use PHPUnit\Framework\TestCase;

final class backward_primesTest extends TestCase
{
    public function testEmptyOneNumberNotPrime() 
    {
        $result = getBackwardPrimes(14, 14);
        $this->assertEmpty($result);
    }
    public function testOneNumberIsPrime()
    {
        $result = getBackwardPrimes(13, 13);
        $this->assertEquals([13], $result);
    }
/*    public function testFirstNumberIsBigger()
    {
        $result = getBackwardPrimes(20, 1);
        $this->assertEquals(null, $result);
    }  */
    
    public function testItThrowsExceptionIfBiggerFirstNumber()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('number');
               
        getBackwardPrimes(20, 1);
    }
}
