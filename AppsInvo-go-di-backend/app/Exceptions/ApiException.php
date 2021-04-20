<?php
namespace App\Exceptions;

use Exception;

class ApiException extends Exception
{
    public $errorCode;

    public function __construct($errorCode, $message, $code = 1, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errorCode = $errorCode;
    }
}