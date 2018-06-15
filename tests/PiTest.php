<?php

use PHPUnit\Framework\TestCase;
use Xafardero\Pi;
use Xafardero\InvalidPiNumberException;
 
class PiTest extends TestCase
{
    public function testHasNormalLength()
    {
        $pi = 3.14;
        $this->assertEquals($pi, Pi::fromString($pi)->number());
    }

    public function testWrong()
    {
        $this->expectException(InvalidPiNumberException::class);

        $pi = 6;
        Pi::fromString($pi);
    }

}
