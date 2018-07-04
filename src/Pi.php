<?php
declare(strict_types=1);

namespace Xafardero;

final class Pi
{
    private $number;

    private function __construct(string $number)
    {
        $pi = $this->piWithSameLength($number);

        if ($number !== $pi || $number === '') {
            throw InvalidPiNumberException::invalidPiNumber($number);
        }

        $this->number = $number;
    }

    public static function fromString($number): self
    {
        return new self($number);
    }

    public static function build(): self
    {
        return new self((string)pi());
    }

    public function number(): string
    {
        return $this->number;
    }

    public function __toString()
    {
        return (string) $this->number;
    }

    private function piWithSameLength(string $number): string
    {
        return substr((string)pi(), 0, strlen($number));
    }
}

