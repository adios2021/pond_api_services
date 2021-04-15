<?php

namespace App\Exceptions;

use Exception;

class UserLockedException extends Exception
{
    /**
     * InvalidPasswordResetTokenException constructor.
     * @param string $message
     */
    public function __construct($message = 'User is locked')
    {
        parent::__construct($message);
    }
}
