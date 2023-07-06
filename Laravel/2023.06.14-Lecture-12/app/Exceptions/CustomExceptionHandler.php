<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Throwable;
use App\Exceptions\CustomException;


class CustomExceptionHandler extends ExceptionHandler
{
    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        if ($exception instanceof CustomException) {
            // Логване на грешката
            Log::error($exception->getMessage(), [
                'exception' => $exception,
            ]);
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        // Кастомна логика за визуализация на грешката
        if ($exception instanceof CustomException) {
            // Вашата логика за обработка на специфична грешка
            return response()->view('errors.custom', [], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return parent::render($request, $exception);
    }
}