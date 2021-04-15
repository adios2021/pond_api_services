<?php

namespace App\Exceptions;

use Exception;

class OAuthServerException extends Exception
{
    /**
     * InvalidPasswordResetTokenException constructor.
     * @param string $message
     */
    public function __construct($message = 'OAuth server failed')
    {
        parent::__construct($message);
    }
}
