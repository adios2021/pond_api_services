<?php

namespace App\Exceptions;

use Exception;

class AuthModelNotSetException extends Exception
{
    /**
     * InvalidPasswordResetTokenException constructor.
     * @param string $message
     */
    public function __construct($message = 'User is not set')
    {
        parent::__construct($message);
    }
}
