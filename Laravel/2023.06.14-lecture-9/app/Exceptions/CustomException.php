<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    public function report()
    {
        // Добавете кода си тук, който ще се изпълни при съобщаване на грешката
    }

    public function renderable()
    {
        // Добавете кода си тук, който ще се изпълни при изобразяване на грешката
    }
}
