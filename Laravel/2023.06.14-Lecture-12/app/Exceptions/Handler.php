<?php

namespace App\Exceptions;

use App\Exceptions\CustomExceptionHandler as ExceptionHandler;
use Illuminate\Foundation\Exceptions\Handler as BaseExceptionHandler;
use Throwable;
use Illuminate\Support\Facades\Log;

class Handler extends BaseExceptionHandler

{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
