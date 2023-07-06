<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    // Допълнителни методи и свойства на вашето изключение

    /**
     * Конструктор на класа.
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Превръща изключението в низово представяне.
     *
     * @return string
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function getHandler()
    {
        return app(CustomExceptionHandler::class);
    }

    
}