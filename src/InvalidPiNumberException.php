<?php

namespace Xafardero;

use \Exception;

class InvalidPiNumberException extends Exception {

    public final function invalidPiNumber($number): self
    {
        return new self(
            sprintf(
                'The number %s is not the Pi number',
                (string) $number
            )
        );
    }
}
 
