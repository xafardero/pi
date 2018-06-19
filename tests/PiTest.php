<?php

namespace Xafardero\Tests;

use PHPUnit\Framework\TestCase;
use Xafardero\Pi;
use Xafardero\InvalidPiNumberException;
 
class PiTest extends TestCase
{
    /**
     * @dataProvider validPiList
     */
    public function testNumberIsAPiNumber($validPi)
    {
        $this->assertEquals($validPi, Pi::fromString($validPi)->number());
    }

    public function validPiList()
    {
        return [
            [3.14],
            [3.141],
            [3.1415],
        ];
    }

    /**
     * @dataProvider invalidPiList
     */
    public function testWrong($invalidPi)
    {
        $this->expectException(InvalidPiNumberException::class);

        Pi::fromString($invalidPi);
    }

    public function invalidPiList()
    {
        return [
            [6],
            [3.14151],
        ];
    }

}
