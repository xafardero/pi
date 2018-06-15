<?php

namespace Xafardero;

use Xafardero\InvalidPiNumberException;

class Pi
{
    private $number;

    private function __construct(float $number)
    {
        $piWithSameLenght =  (float) substr(M_PI, 0, strlen($number));

        if ($number !== $piWithSameLenght) {
            throw new InvalidPiNumberException(
                sprintf(
                    'The number %s is not the Pi number',
                    (string) $number
                )
            );
        }

        $this->number = $number;
    }

    public static function fromString($number)
    {
        return new self($number);
    }

    public function number(): float
    {
        return $this->number;
    }
}

