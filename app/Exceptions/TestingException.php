<?php

namespace App\Exceptions;

use Exception;

class TestingException extends Exception
{
    public function __construct($message = null, $code = 0, Exception $previous = null)
    {
        $message = $message ?: 'Not Passed';

        parent::__construct($message, $code, $previous);
    }
}
