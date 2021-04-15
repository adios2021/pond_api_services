<?php

namespace App\Exceptions;

use Exception;

class InvalidPasswordException extends Exception
{
    /**
     * InvalidPasswordResetTokenException constructor.
     * @param string $message
     */
    public function __construct($message = 'Password must contain the following: 1 uppercase, 1 special character and a mininum of 8 characters')
    {
        parent::__construct($message);
    }
}
