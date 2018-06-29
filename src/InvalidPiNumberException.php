<?php
declare(strict_types=1);

namespace Xafardero;

use \Exception;

final class InvalidPiNumberException extends Exception
{
    public final function invalidPiNumber(string $number): self
    {
        return new self(sprintf('The %s is not the Pi number', $number));
    }
}
 
