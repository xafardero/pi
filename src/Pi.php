<?php

namespace Xafardero;

final class Pi
{
    private $number;

    private function __construct(float $number)
    {
        $piWithSameLenght =  (float) substr(M_PI, 0, strlen($number));

        if ($number !== $piWithSameLenght) {
            throw InvalidPiNumberException::invalidPiNumber($number);
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

    public function __toString()
    {
        return (string) $this->number;
    }
}

