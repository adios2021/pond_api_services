<?php

namespace App\Exceptions;

use Exception;

class UserPendingException extends Exception
{
    /**
     * InvalidPasswordResetTokenException constructor.
     * @param string $message
     */
    public function __construct($message = 'User is pending')
    {
        parent::__construct($message);
    }
}
