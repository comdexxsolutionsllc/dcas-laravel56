<?php

namespace App\Exceptions;

use DCAS\Traits\LogHttpError;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{

    use LogHttpError;

    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception               $exception
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof AuthorizationException) {
            return $this->outputHttpError($request, '403', $exception);
        }

        if ($exception instanceof NotFoundHttpException) {
            return $this->outputHttpError($request, '404', $exception);
        }

        return parent::render($request, $exception);
    }

    /**
     * Report or log an exception.
     *
     * @param  \Exception $exception
     *
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception): void
    {
        parent::report($exception);
    }
}
